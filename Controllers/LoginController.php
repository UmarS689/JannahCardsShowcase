<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Outputs login form.
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Lets user login.
    public function login(Request $request)
    {
        // Validates form entries.
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // If user succeeds then they enter, otherwise bounce-back.
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended();
        }
        return back()->withErrors([
            'email' => 'Invalid credentials.'
        ]);
    }
}
