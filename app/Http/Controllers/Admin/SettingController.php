<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        return view('admin.pages.setting');
    }

    public function updateSetting(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $setting = Setting::where('name', $key)->first();
            $setting = $setting != null ? $setting : new Setting();
            $setting->name = $key;
            if ($request->hasFile('siteLogo') && $key == 'siteLogo') {
                $setting->value = $request->file('siteLogo')->store('logos', 'public');
            } else {
                $setting->value = $value;
            }
            $setting->save();
        }
        return redirect()->back()
            ->with('mgs', ['Success', 'Settings Updated Successfull!']);
    }
}
