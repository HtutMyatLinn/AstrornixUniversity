<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    public function store(RegisterRequest $request): RedirectResponse
    {
        // Get the last used UserID from the database
        $lastUser = User::orderBy('UserID', 'desc')->first();

        // Extract the numeric part of the last UserID
        $lastUserId = $lastUser ? intval(substr($lastUser->UserID, 1)) : 0;

        // Increment the numeric part
        $newNumericPart = $lastUserId + 1;

        // Generate the new UserID
        $UserID = 'U' . str_pad($newNumericPart, 6, '0', STR_PAD_LEFT);

        $user = User::create([
            'UserID' => $UserID,
            'Username' => $request->username,
            'FirstName' => $request->first_name,
            'LastName' => $request->last_name,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),
            'FacultyID' => $request->facultyID,
            'RoleID' => $request->roleID,
            'LastLoginDate' => now(),
            'LastPasswordChangedDate' => now(),
            'PasswordExpiredDate' => now()->addMonths(2),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
