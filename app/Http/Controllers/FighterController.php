<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Fighter $fighter)
    {
        $fighters = [
            'bantam' => $fighter->where('weight', '<=', 61.2)->get(),
            'feather' => $fighter->where('weight', '>', 61.2)->where('weight', '<=', '70.3')->get(),
            'light' => $fighter->where('weight', '>', 70.3)->where('weight', '<=', '78.0')->get(),
            'heavy' => $fighter->where('weight', '>', 78.0)->get()
        ];
        return view('fighters.index', compact('fighters'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Fighter $fighter)
    {
        return view('fighters.show', compact('fighter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fighter $fighter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fighter $fighter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fighter $fighter)
    {
        //
    }
}
