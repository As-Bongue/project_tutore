<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::all();

        return view('pages.niveau.niveaux', compact('niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux = new Niveau();

        $cycles = Cycle::all();

        return view('pages.niveau.create', compact('niveaux','cycles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Niveau::create([
            'intitule' => $request->niveau,
            'cycle_code' => $request->cycle,
        ]);

        return redirect()->route('niveau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
    {
        $niveaux = Niveau::whereId($niveau->id)->first();

        return view('pages.niveau.show', compact('niveaux'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        $cycles = Cycle::all();

        $niveaux = Niveau::whereId($niveau->id)->firstOrFail();

        return view('pages.niveau.edit', compact('niveaux', 'cycles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        $niveaux = Niveau::whereId($niveau->id)->firstOrFail();

        $niveaux->update([
            'intitule' => $request->niveau,
            'cycle_code' => $request->cycle,
        ]);

        return redirect()->route('niveau.show', $niveau);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        Niveau::destroy($niveau->id);

        return redirect()->route('niveau.index');
    }
}
