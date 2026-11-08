@extends('layouts.perpustakaan')

@section('title', 'Kelola Pengguna')

@section('content')
<h2>Kelola Pengguna</h2>

@if (session('status'))
    <div class="pesan pesan-sukses">{{ session('status') }}</div>
@endif

@error('role')
    <div class="pesan pesan-error">{{ $message }}</div>
@enderror

<table class="tabel-buku">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Ubah Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->getRoleNames()->implode(', ') ?: '-' }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.users.role', $user) }}">
                        @csrf
                        @method('PATCH')
                        <select name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role }}" @selected($user->hasRole($role))>
                                    {{ $role }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit">Simpan</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection