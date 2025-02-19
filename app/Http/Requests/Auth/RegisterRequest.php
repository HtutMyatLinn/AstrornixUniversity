<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:30'],
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users,Email'],
            'password' => ['required', 'confirmed', 'min:8', 'max:16', 'regex:/[A-Z]/', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[\W_]/', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],
            'facultyID' => ['nullable', 'exists:faculties,FacultyID'],
            'roleID' => ['nullable', 'exists:roles,RoleID'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password confirmation does not match',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password must not be greater than 16 characters',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character',
            'terms.required' => 'You must accept the terms and conditions',
        ];
    }
}
