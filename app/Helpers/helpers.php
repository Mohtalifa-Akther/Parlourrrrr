<?php


if (!function_exists('setting')) {
    function setting($name)
    {
        $setting = \App\Setting::where('name', $name)->first();
        return $setting != null ? $setting->value : 'N/A';
    }
}

if(!function_exists('admin_notification')){
    function admin_notification(\App\Admin $damin)
    {
        return $admin->notifications;
    }
}

if(!function_exists('customer_notification')){
    function customer_notification(\App\Customer $customer)
    {
        return $customer->notifications;
    }
}
