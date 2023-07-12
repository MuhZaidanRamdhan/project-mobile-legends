<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Hero;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $heroes = Hero::inRandomOrder()->limit(3)->get();
        $favorits = Favorit::inRandomOrder()->limit(3)->get();
        return view('welcome',compact('heroes','favorits'));
    }

    public function page()
    {
        $publics = User::all();
        $heroes = Hero::inRandomOrder()->limit(3)->get();
        // $users = User::whereNotIn('id', [1])->inRandomOrder()->limit(3)->get();
        $user = Auth::user();
        // $favorits = Favorit::where('user_id', $user->id)->with('hero')->get();
        $favorits = Favorit::inRandomOrder()->limit(3)->get();
        $sessionId = session()->getId();

        return view('page',compact('user','publics','favorits','heroes'));
    }

    public function show($id)
    {
        $hero = Hero::find($id);
        $heroes = Hero::whereNotIn('id', [$id])->inRandomOrder()->limit(4)->get();

        return view('detail',compact('hero','heroes'));
    }
    

    public function list()
    {
        $list_heroes = Hero::inRandomOrder()->get();
        return view('/list',compact('list_heroes'));
    }

    
}







