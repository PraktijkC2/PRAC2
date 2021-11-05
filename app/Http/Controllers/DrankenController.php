<?php

namespace App\Http\Controllers;

use App\Models\Dranken;
use App\Models\Stakeholders;
use Illuminate\Http\Request;

class DrankenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dranken = Dranken::all();
        return view('dranken/index');
    }

    public function listDranken($id)
    {
        $dranken = Dranken::where('id', $id)->first();
        return view('dranken.index', compact('dranken'));
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
