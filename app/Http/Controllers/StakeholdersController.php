<?php

namespace App\Http\Controllers;

use App\Models\Dranken;
use App\Models\Gereedschap;
use App\Models\Stakeholders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StakeholdersController extends Controller
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
            $gereedschap = Gereedschap::all();
                return view('stakeholders/index')
                ->with(compact('dranken'))
                ->with(compact('gereedschap'));
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
     * @param  \App\Models\Stakeholders  $stakeholders
     * @return \Illuminate\Http\Response
     */
    public function show(Stakeholders $stakeholders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stakeholders  $stakeholders
     * @return \Illuminate\Http\Response
     */
    public function edit(Stakeholders $stakeholders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stakeholders  $stakeholders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stakeholders $stakeholders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stakeholders  $stakeholders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stakeholders $stakeholders)
    {
        //
    }
}
