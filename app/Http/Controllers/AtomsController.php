<?php

namespace App\Http\Controllers;

use App\Models\Atom;
use Illuminate\Http\Request;

use Inertia\Inertia;

class AtomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Atoms/Index', []);
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
     * @param  \App\Models\Atom  $atom
     * @return \Illuminate\Http\Response
     */
    public function show(Atom $atom)
    {
        return Inertia::render('Atoms/Show', []);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atom  $atom
     * @return \Illuminate\Http\Response
     */
    public function edit(Atom $atom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atom  $atom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atom $atom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atom  $atom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atom $atom)
    {
        //
    }
}
