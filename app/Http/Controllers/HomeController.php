<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\livre;
use App\Models\Categorie;
use App\Models\reservation;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index() {
        $user = User::where('type_user', 'user')->get()->count();
        $livre = livre::all()->count();
        $categorie = categorie::all()->count();
        $reservation = reservation::all()->count();

        return view("admin.index", compact('user', 'livre' , 'categorie' , 'reservation'));
    }

    public function create() {
        $categories = Categorie::all();
        return view("home.index", compact('categories'));
    }

    public function store(request $request) {

        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $validated['user_id'] = Auth::id();
        profile::create($validated);

        return redirect()->back();
    }


}
