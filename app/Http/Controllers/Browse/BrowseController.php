<?php

namespace App\Http\Controllers\Browse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrowseController extends Controller
{
    public function home()
    {
        return view('pages.ar.index');
    }

    public function about()
    {
        return view('pages.ar.about');
    }

    public function project()
    {
        return view('pages.ar.project');
    }

    public function contact()
    {
        return view('pages.ar.contact');
    }

    
   // English pages
    public function Enhome()
    {
        return view('pages.en.index');
    }

    public function Enabout()
    {
        return view('pages.en.about');
    }

    public function Enproject()
    {
        return view('pages.en.project');
    }

    public function Encontact()
    {
        return view('pages.en.contact');
    }
}
