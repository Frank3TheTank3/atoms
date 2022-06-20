<?php

namespace App\Http\Controllers;

use App\Models\Atom;
use App\Models\AtomComment;
use App\Models\AtomFact;
use App\Models\AtomImage;
use App\Models\MiniGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $atoms = Atom::all();
        return Inertia::render('Atoms/Index', [ "atoms" => $atoms]);
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
        $comments = AtomComment::select('atom_comments.*', "users.name")
            ->where("atom_id", $atom->id)
            ->join("users", 'users.id', '=', 'atom_comments.user_id')
            ->get();
        $facts = AtomFact::all()->where("atom_id", $atom->id);
        $images = AtomImage::all()->where("atom_id", $atom->id);
        $minigame = MiniGame::all()->where("user_id", optional(Auth::user())->id);
        return Inertia::render('Atoms/Show', [
            "atom" => $atom,
            "comments" => $comments,
            "facts" => $facts,
            "images" => $images,
            "minigame" => $minigame
        ]);
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
