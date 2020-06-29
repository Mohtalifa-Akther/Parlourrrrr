<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data['user'] = auth()->guard('admin')->user();
        return view('admin.pages.profile', $data);
    }

    public function updateProfile(Request $request)
    {
        $admin = Admin::find(auth()->guard('admin')->user()->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->hasFile('avatar')) {
            $admin->avatar = $request->file('avatar')->store('customers', 'public');
        }
        if ($admin->password != $request->password) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();
        return redirect()->back()->with('mgs', ['Success', 'Profile Update Successfully!']);
    }
}
