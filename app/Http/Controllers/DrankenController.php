<?php

namespace App\Http\Controllers;

use App\Models\Dranken;
use App\Models\Stakeholders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrankenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $dranken = Dranken::all();
            return view('dranken/index');
        }
        else{
            return view('auth.login');
        } 
    }

    public function listDranken($categorie)
    {
        if(Auth::check()){
            $dranken = Dranken::where('categorie', $categorie)->get();
            return view('dranken.index', compact('dranken'));
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
     * @param  \App\Models\Dranken  $dranken
     * @return \Illuminate\Http\Response
     */
    public function show(Dranken $dranken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dranken  $dranken
     * @return \Illuminate\Http\Response
     */
    public function edit(Dranken $dranken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dranken  $dranken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dranken $dranken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dranken  $dranken
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dranken $dranken)
    {
        //
    }
}
