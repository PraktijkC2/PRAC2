<?php

namespace App\Http\Controllers;

use App\Models\Gereedschap;
use Illuminate\Http\Request;

class GereedschapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gereedschap/index');
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
     * @param  \App\Models\Gereedschap  $gereedschap
     * @return \Illuminate\Http\Response
     */
    public function show(Gereedschap $gereedschap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gereedschap  $gereedschap
     * @return \Illuminate\Http\Response
     */
    public function edit(Gereedschap $gereedschap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gereedschap  $gereedschap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gereedschap $gereedschap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gereedschap  $gereedschap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gereedschap $gereedschap)
    {
        //
    }
}
