<?php

namespace App\Http\Controllers\Team;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teams = Team::all();

       return $teams;
    }

    public function store(Request $request)
    {
         Team::create([
         'ar_name' => $request->ar_name,
         'en_name'=>$request->en_name,
         'ar_specialization' =>$request->ar_spec,
         'en_specialization' =>$request->en_spec,
         'photo' => $request->photo->store('public/team_img')

        ]);

        return 'data saved';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
