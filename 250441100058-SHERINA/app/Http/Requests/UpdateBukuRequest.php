<?php

namespace App\Http\Requests;

class UpdateBukuRequest extends StoreBukuRequest
{
    public function rules(): array
    {
        $rules = parent::rules();

        if ($this->isMethod('patch') || $this->isMethod('put')) {
            foreach ($rules as $field => $rule) {
                if (is_string($rule)) {
                    $rules[$field] = str_replace('required', 'sometimes|required', $rule);
                } elseif (is_array($rule)) {
                    $index = array_search('required', $rule);
                    if ($index !== false) {
                        $rule[$index] = 'sometimes';
                        $rule[] = 'required';
                        $rules[$field] = $rule;
                    }
                }
            }
        }

        return $rules;
    }
}