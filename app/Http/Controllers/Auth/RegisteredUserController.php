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
        $lastUser = User::orderBy('user_id', 'desc')->first();

        // Extract the numeric part of the last UserID
        $lastUserId = $lastUser ? intval(substr($lastUser->user_id, 1)) : 0;

        // Increment the numeric part
        $newNumericPart = $lastUserId + 1;

        // Generate the new UserID
        $user_id = 'U' . str_pad($newNumericPart, 6, '0', STR_PAD_LEFT);

        $user = User::create([
            'user_id' => $user_id,
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'faculty_id' => $request->facultyID,
            'role_id' => $request->roleID,
            'last_login_date' => now(),
            'last_password_changed_date' => now(),
            'password_expired_date' => now()->addMonths(2),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
