<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('modules.auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $auth = Auth::attempt($request->only(['login', 'password']), $request->rememberMe ?: false);

        if ($auth) {
            return redirect(route('admin.dashboard'));
        } else {
            return redirect()->back()->withErrors(['message' => 'Login failed! Username or password is not correct.']);
        }
    }
}
