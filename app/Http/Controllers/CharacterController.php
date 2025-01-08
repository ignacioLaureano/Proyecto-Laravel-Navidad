<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;
class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters_all = Character::all();
        $characters_all = Character::paginate(1);

        return view('characters.index', ['characters_all' => $characters_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $characters = new Character;
        $characters -> name = $request->name;~
        $characters -> level = $request->level;
        $characters -> account_creation = $request->account_creation;
        $characters -> isActive = $request->isActive;
        $characters -> genre = $request->genre;
        $characters -> type = $request->type;

        $characters->save();

        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $characters = Character::find($id);
        return view('characters.edit', ['character' => $characters]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $characters = Character::find($id);
        $characters -> name = $request->name;~
        $characters -> level = $request->level;
        $characters -> isActive = $request->isActive;
        $characters -> genre = $request->genre;
        $characters -> type = $request->type;

        $characters->save();

        return redirect()->route('characters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $characters = Character::find($id);
        $characters -> delete();

        return redirect()->route('characters.index');
    }
}
