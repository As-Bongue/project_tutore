<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Moi;
use Illuminate\Http\Request;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annees = Annee::all();

        return view('pages.annee.annees', compact('annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annees = new Annee();

        return view('pages.annee.create', compact('annees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mois = Moi::all();

        $ans = Annee::create([
            'libele' => $request->annee,
        ]);

        $ans->mois()->attach($mois);

        return redirect()->route('annees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annee  $annee
     * @return \Illuminate\Http\Response
     */
    public function show(Annee $annee)
    {
        $annees = Annee::whereId($annee->id)->first();

        return view('pages.annee.show', compact('annees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annee  $annee
     * @return \Illuminate\Http\Response
     */
    public function edit(Annee $annee)
    {
        $annees = Annee::whereId($annee->id)->firstOrFail();

        return view('pages.annee.edit', compact('annees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annee  $annee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annee $annee)
    {
        $annees = Annee::whereId($annee->id)->firstOrFail();

        $annees->update([
            'libele' => $request->annee,
        ]);

        return redirect()->route('annees.show', $annees);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annee  $annee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annee $annee)
    {
        Annee::destroy($annee->id);

        return redirect()->route('annees.index');
    }
}
