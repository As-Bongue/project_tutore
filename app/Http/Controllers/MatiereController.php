<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Matiere;
use App\Models\Niveau;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::all();

        return view('pages.matiere.matieres', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = new Matiere();

        $enseignants = Enseignant::all();

        $niveaux = Niveau::all();

        return view('pages.matiere.create', compact('matieres', 'enseignants', 'niveaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matiere::create([
            'code' => $request->code,
            'intitule' => $request->matiere,
            'quota_horaire' => $request->quota,
            'semestre' => $request->semestre,
            'prix_unitaire' => $request->prix,
            'enseignant_code' => $request->enseignant,
            'niveau_id' => $request->niveau,
        ]);

        return redirect()->route('matieres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        $matieres = Matiere::whereCode($matiere->code)->first();

        return view('pages.matiere.show', compact('matieres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        $enseignants = Enseignant::all();

        $niveaux = Niveau::all();

        $matieres = Matiere::whereCode($matiere->code)->firstOrFail();

        return view('pages.matiere.edit', compact('matieres', 'enseignants', 'niveaux'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $matieres = Matiere::whereCode($matiere->code)->firstOrFail();

        $matieres->update([
            'code' => $request->code,
            'intitule' => $request->matiere,
            'quota_horaire' => $request->quota,
            'semestre' => $request->semestre,
            'prix_unitaire' => $request->prix,
            'enseignant_code' => $request->enseignant,
            'niveau_id' => $request->niveau,
        ]);

        return redirect()->route('matieres.show', $matieres);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        Matiere::destroy($matiere->code);

        return redirect()->route('matieres.index');
    }
}
