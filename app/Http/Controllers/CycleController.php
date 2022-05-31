<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycles = Cycle::all();

        return view('pages.cycle.cycles', compact('cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cycles = new Cycle();
        return view('pages.cycle.create', compact('cycles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cycle::create([
            'code' => $request->code,
            'intitule' => $request->cycle,
        ]);

        return redirect()->route('cycle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        $cycles = Cycle::whereCode($cycle->code)->first();

        return view('pages.cycle.show', compact('cycles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        $cycles = Cycle::whereCode($cycle->code)->firstOrFail();

        return view('pages.cycle.edit', compact('cycles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        $cycles = Cycle::whereCode($cycle->code)->firstOrFail();

        $cycles->update([
            'code' => $request->code,
            'intitule' => $request->cycle,
        ]);

        return redirect()->route('cycle.show', $cycles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
        Cycle::destroy($cycle->code);

        return redirect()->route('cycle.index');
    }
}
