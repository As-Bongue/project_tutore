<?php

namespace App\Http\Controllers;

use App\Models\Emargement;
use App\Models\Matiere;
use App\Models\Moi;
use Illuminate\Http\Request;

class EmargementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emargements = Emargement::all();

        return view('pages.emargement.emargements', compact('emargements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = Matiere::all();

        $mois = Moi::all();

        $emargements = new Emargement();

        return view('pages.emargement.create', compact('emargements', 'matieres', 'mois'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Emargement::create([
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'jour' => $request->date,
            'matiere_code' => $request->matiere,
            'moi_id' => $request->moi,
        ]);

        return redirect()->route('emargement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emargement  $emargement
     * @return \Illuminate\Http\Response
     */
    public function show(Emargement $emargement)
    {
        $emargements = Emargement::whereId($emargement->id)->first();

        return view('pages.emargement.show', compact('emargements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emargement  $emargement
     * @return \Illuminate\Http\Response
     */
    public function edit(Emargement $emargement)
    {
        $matieres = Matiere::all();

        $mois = Moi::all();

        $emargements = Emargement::whereId($emargement->id)->firstOrFail();

        return view('pages.emargement.edit', compact('matieres', 'mois', 'emargements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emargement  $emargement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emargement $emargement)
    {
        $emargements = Emargement::whereId($emargement->id)->firstOrFail();

        $emargements->update([
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'jour' => $request->date,
            'matiere_code' => $request->matiere,
            'moi_id' => $request->moi,
        ]);

        return redirect()->route('emargement.show', $emargements);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emargement  $emargement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emargement $emargement)
    {
        Emargement::destroy($emargement->id);

        return redirect()->route('emargement.index');
    }
}
