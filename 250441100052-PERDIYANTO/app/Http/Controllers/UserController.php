<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.users.index', [
            'users' => User::with('roles')->orderBy('name')->get(),
            'roles' => Role::orderBy('name')->pluck('name'),
        ]);
    }

    public function updateRole(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'role' => ['required', Rule::in(Role::pluck('name')->all())],
        ]);

        // Admin tidak boleh mengubah role dirinya sendiri
        if ($user->id === auth()->id()) {
            return back()->withErrors([
                'role' => 'Kamu tidak dapat mengubah role akunmu sendiri.',
            ]);
        }

        // menetapkan role baru
        $user->syncRoles($data['role']);

        return back()->with('status', "Role {$user->name} diubah menjadi {$data['role']}.");
    }
}