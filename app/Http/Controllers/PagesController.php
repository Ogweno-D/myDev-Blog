<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    // 
    public function home()
    {

        return view('pages.index');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function author()
    {
        return view('pages.author');
    }

    public function products()
    {
        return view('pages.products');
    }
    public function post()
    {
        return view('pages.post');
    }

}
