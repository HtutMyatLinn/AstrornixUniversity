<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Username' => ['required', 'string', 'max:30'],
            'FirstName' => ['required', 'string', 'max:30'],
            'LastName' => ['required', 'string', 'max:30'],
            'Email' => ['required', 'string', 'email', 'max:30', 'unique:users,Email'],
            'Password' => ['required', 'confirmed', Rules\Password::defaults()],
            'FacultyID' => ['nullable', 'exists:faculties,FacultyID'],
            'RoleID' => ['required', 'exists:roles,RoleID'],
        ]);

        // Get the last used UserID from the database
        $lastUser = User::orderBy('UserID', 'desc')->first();

        // Extract the numeric part of the last UserID
        $lastUserId = $lastUser ? intval(substr($lastUser->UserID, 1)) : 0;

        // Increment the numeric part
        $newNumericPart = $lastUserId + 1;

        // Generate the new UserID
        $UserID = 'U' . str_pad($newNumericPart, 6, '0', STR_PAD_LEFT);

        $user = User::create([
            'UserID' => $UserID, // Provide the generated UserID
            'Username' => $request->Username,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Email' => $request->Email,
            'Password' => Hash::make($request->Password),
            'FacultyID' => $request->FacultyID,
            'RoleID' => $request->RoleID,
            'LastLoginDate' => now(), // Set initial last login date
            'LastPasswordChangedDate' => now(), // Set initial password change date
            'PasswordExpiredDate' => now()->addMonths(2), // Set password expiration date (e.g., 6 months from now)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
