<?php

namespace App\Http\Controllers;

use App\Models\Difficult;
use Illuminate\Http\Request;

class DifficultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $difficulties = Difficult::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('difficulties/index',compact('difficulties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $difficulties = Difficult::all();

        return view('difficulties/index',compact('difficulties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'level' => 'required',
        ]);

        Difficult::create($validateData);

        return redirect('/difficulties')->with('success', 'data successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Difficult $difficult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Difficult $difficult)
    {
        return view('difficulties.edit',compact('difficult'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Difficult $difficult)
    {
        $validateData = $request->validate([
            'level' => 'required',
        ]);

        $difficult->update($validateData);

        return redirect('/difficulties')->with('success', 'data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Difficult $difficult)
    {
        $difficult->delete();
        return redirect('/difficulties')->with('success', 'data deleted successfully!');
    }
}
