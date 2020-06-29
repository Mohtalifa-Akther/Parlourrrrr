<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('login-error', 'Login Invalid');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/admin/login');
    }

    public function register(Request $request)
    {

        if (Admin::where('email', $request->email)->first() != null) {
            return redirect()->back()->with('register-error', 'Email exist');
        }

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->avatar = $request->file('avatar')->store('customers', 'public');
        $admin->password = bcrypt($request->password);
        // dd($request->except('_token'));
        $admin->save();
        return redirect()->back()->with('register-success', 'Successfully Registerd');
    }
}
