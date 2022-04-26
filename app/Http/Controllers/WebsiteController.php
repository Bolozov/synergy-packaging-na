<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function references()
    {
        return view('website.references');
    }
}
