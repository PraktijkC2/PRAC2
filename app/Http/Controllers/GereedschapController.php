<?php

namespace App\Http\Controllers;

use App\Models\Gereedschap;
use App\Models\Stakeholders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GereedschapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $gereedschap = Gereedschap::All();
            return view('gereedschap/index');
        }
        else{
            return view('auth.login');
        }
    }

    public function listGereedschap($id)
    {
        if(Auth::check()){
            $gereedschap = Gereedschap::where('id', $id)->first();
            return view('gereedschap.index', compact('gereedschap'));
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
