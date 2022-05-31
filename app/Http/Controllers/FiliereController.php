<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();

        return view('pages.filiere.filieres', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = new Filiere();

        return view('pages.filiere.create', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filiere::create([
            'code' => $request->code,
            'intitule' => $request->filiere,
        ]);

        return redirect()->route('filiere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        $filieres = Filiere::whereCode($filiere->code)->first();

        return view('pages.filiere.show', compact('filieres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        $filieres = Filiere::whereCode($filiere->code)->firstOrFail();

        return view('pages.filiere.edit', compact('filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        $filieres = Filiere::whereCode($filiere->code)->firstOrFail();

        $filieres->update([
            'code' => $request->code,
            'intitule' => $request->filiere,
        ]);

        return redirect()->route('filiere.show', $filieres);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        Filiere::destroy($filiere->code);

        return redirect()->route('filiere.index');
    }
}
