<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $actors = Actors::all();
            return view('actors/index');
        }
        else{
            return view('auth.login');
        } 
    }

    public function listActor($id)
    {
        if(Auth::check()){
            $actors = Actors::where('id', $id)->first();
            return view('actors.index', compact('actors'));
        }
        else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function show(Actors $actors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function edit(Actors $actors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actors $actors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actors $actors)
    {
        //
    }
}
