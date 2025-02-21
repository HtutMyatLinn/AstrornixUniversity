<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role_id == '1') {
                return redirect()->intended(route('admin'));
            } elseif ($user->role_id == '2') {
                return redirect()->intended(route('marketingmanager.marketing-manager')); // ✅ Correct route name
            } elseif ($user->role_id == '3') {
                return redirect()->intended(route('marketingcoordinator.marketing-coordinator')); // ✅ Correct route name
            }
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
