<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function functions()
    {
        return view('functions');
    }

    
public function restaurant()
{
    return view('restaurant');
}


}
