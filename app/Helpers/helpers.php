<?php


if (!function_exists('setting')) {
    function setting($name)
    {
        $setting = \App\Setting::where('name', $name)->first();
        return $setting != null ? $setting->value : 'N/A';
    }
}
