<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Livre;

class LivreController extends Controller
{
    public function index($id){
        $categorie = Categorie::findOrFail($id);

        $livres = Livre::where('categorie_id' , $id)->get();
        return view('Roman', compact('categorie','livres'));

    }
}
