<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\livre;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create($livre) {
        return view("reservation", compact('livre'));
    }

    public function store(Request $request,$livre)
    {
        $validated = $request->validate([
            'date_emprunt' => 'required',
            'heure_emprunt' => 'required',
            'date_reservation' => 'required',
        ]);
        $validated['user_id'] = Auth::id();
        $validated['livre_id'] = $livre;
        $validated['etat'] = 'en attente';
        // return dd($validated);
        Reservation::create($validated);
        $livre = Livre::find($livre);
        $livre->decrement('NbrExemplaire');        // Redirection avec un message de succès
        // return back()->with('success', 'Réservation enregistrée avec succès!');
        return redirect()->back()->with('message', 'Réservation enregistrée avec succès!');
    }

    public function index() {
        return view('reservation');
    }
}


