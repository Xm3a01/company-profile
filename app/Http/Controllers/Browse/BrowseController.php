<?php

namespace App\Http\Controllers\Browse;
use DB;
use App\Company;
use App\Product;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrowseController extends Controller
{
    public function home()
    {
        $product = DB::table('products')->limit(4)->get();
        $project = DB::table('projects')->limit(4)->get();
        $team    = DB::table('teams')->limit(4)->get();

        return view('pages.ar.index');
    }

    public function about()
    {
        $company = Company::all();

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
        $product = DB::table('products')->limit(4)->get();
        $project = DB::table('projects')->limit(4)->get();
        $team  = DB::table('teams')->limit(4)->get();

        return view('pages.en.index');
    }

    public function Enabout()
    {
        $company = Company::all();

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
