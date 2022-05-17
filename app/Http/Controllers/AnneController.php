<?php

namespace App\Http\Controllers;

use App\Models\Annee_academique;
use App\Models\Moi;
use Illuminate\Http\Request;

class AnneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ans = Annee_academique::all();

        return view('pages.annee.annees', compact('ans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ans = new Annee_academique();

        return view('pages.annee.create', compact('ans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annee = Annee_academique::create([
            'libele' => $request->annee,
        ]);

        $id_annee = $annee->id;

        Moi::create([
            'libele' => 'Janvier',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Fevrier',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Mars',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Avril',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Mai',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Juin',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Juillet',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Aout',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Septembre',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Octobre',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Novembre',
            'annee_academique_id' => $id_annee,
        ]);
        Moi::create([
            'libele' => 'Decembre',
            'annee_academique_id' => $id_annee,
        ]);

        return redirect()->route('annee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annee_academique  $annee_academique
     * @return \Illuminate\Http\Response
     */
    public function show(Annee_academique $annee_academique)
    {
        $ans = Annee_academique::whereId($annee_academique->id)->first();

        return view('pages.annee.show', compact('ans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annee_academique  $annee_academique
     * @return \Illuminate\Http\Response
     */
    public function edit(Annee_academique $annee_academique)
    {
        $ans = Annee_academique::whereId($annee_academique->id)->firstOrFail();

        return view('pages.annee.create', compact('ans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annee_academique  $annee_academique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annee_academique $annee_academique)
    {
        $ans = Annee_academique::whereId($annee_academique->id)->firstOrFail();

        $ans->update([
            'libele' => $request->annee,
        ]);

        return redirect()->route('annee.show', $annee_academique);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annee_academique  $annee_academique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annee_academique $annee_academique)
    {
        Annee_academique::destroy($annee_academique->id);

        return redirect()->route('annee.index');
    }
}
