<?php

namespace App\Http\Controllers;

use App\Models\AtomComment;
use Illuminate\Http\Request;

class AtomCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Atom $atom)
    {
        $comments = $post->comments()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Atom $atom)
    {
        abort_if(Gate::denies());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Atom $atom)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AtomComment  $atomComment
     * @return \Illuminate\Http\Response
     */
    public function show(AtomComment $atomComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AtomComment  $atomComment
     * @return \Illuminate\Http\Response
     */
    public function edit(Atom $atom, AtomComment $atomComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AtomComment  $atomComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtomComment $atomComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AtomComment  $atomComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AtomComment $atomComment)
    {
        //
    }
}
