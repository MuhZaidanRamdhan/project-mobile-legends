<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Hero;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorits = Favorit::all();

        return view('favorite',compact('favorits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Favorit $favorit)
    {
        $publics = Auth::user();
        $users = User::all();
        $heroes = Hero::all();

        return view('favcreate',compact('publics','users','heroes','favorit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'hero_id' => 'required',
            'date' => 'required',
            'notes' => 'required',
            'rating' => 'required',
        ]);

        Favorit::create($validateData);

        return redirect('/favorit')->with('success','Data successfully added!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
