<?php

namespace App\Http\Controllers;

use App\Models\Boeken;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoekenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $boeken = Boeken::all();
            return view('books/index');
        }
        else{
            return view('auth.login');
        } 
    }

    public function listBoek($id)
    {
        if(Auth::check()){
            $boeken = Boeken::where('id', $id)->first();
            return view('books.index', compact('boeken'));
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
     * @param  \App\Models\Boeken  $boeken
     * @return \Illuminate\Http\Response
     */
    public function show(Boeken $boeken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boeken  $boeken
     * @return \Illuminate\Http\Response
     */
    public function edit(Boeken $boeken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boeken  $boeken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boeken $boeken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boeken  $boeken
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boeken $boeken)
    {
        //
    }
}
