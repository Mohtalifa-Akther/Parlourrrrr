<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Package;
use App\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['packages'] = Package::get()->take(4);
        $data['services'] = Service::get()->take(4);
        return view('front.pages.home', $data);
    }


    public function sign_up()
    {
        return view('front.pages.signup');
    }

    public function about()
    {
        return view('front.pages.about');
    }
    public function service()
    {
        return view('front.pages.service');
    }
    public function product()
    {
        return view('front.pages.product');
    }
    public function gallery()
    {
        return view('front.pages.gallery');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
}
