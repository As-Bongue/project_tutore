<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialites = Specialite::all();

        return view('pages.specialite.specialites', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();

        $specialites = new Specialite();

        return view('pages.specialite.create', compact('specialites', 'filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Specialite::create([
            'code' => $request->code,
            'intitule' => $request->specialite,
            'filiere_code' => $request->filiere,
        ]);

        return redirect()->route('specialite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function show(Specialite $specialite)
    {
        $specialites = Specialite::whereCode($specialite->code)->first();

        return view('pages.specialite.show', compact('specialites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialite $specialite)
    {
        $filieres = Filiere::all();

        $specialites = Specialite::whereCode($specialite->code)->firstOrFail();

        return view('pages.specialite.edit', compact('specialites', 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialite $specialite)
    {
        $specialites = Specialite::whereCode($specialite->code)->firstOrFail();

        $specialite->update([
            'code' => $request->code,
            'intitule' => $request->specialite,
            'filiere_code' => $request->filiere,
        ]);

        return redirect()->route('specialite.show', $specialite);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialite $specialite)
    {
        Specialite::destroy($specialite->code);

        return redirect()->route('specialite.index');
    }
}
