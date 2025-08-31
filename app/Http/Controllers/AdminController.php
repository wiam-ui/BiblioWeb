<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\livre;
use App\Models\reservation;
use App\Models\user;
use App\Models\profile;

class AdminController extends Controller
{
    public function create() {
        $data=categorie::all();
        return view("admin.categorie",compact('data'));
    }

    public function add(request $request) {
        $categorie = new categorie;
        $categorie->name = $request->name;
        $categorie->description = $request->description;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $path = $image->move(public_path('img'),$imageName);
            $categorie->image = $imageName;
        }

        $categorie->save();
        toastr()->closeButton()->addSuccess('Catégorie ajoutée avec succès');
        return redirect()->back();
    }

    public function edit($id) {
        $data = categorie::find($id);
       return view('admin.edit_categorie', compact('data'));
    }

    public function update(Request $request, $id) {
        $data=categorie::find($id);
        $data -> name = $request->name;
        $data -> description = $request->description;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $path = $image->move(public_path('img'),$imageName);
            $data->image = $imageName;
        }

        $data  -> save();
        return redirect('/categorie');
    }

    public function delete($id) {
        $data = categorie::find($id);
        $data->delete();;
        return redirect()->back();
    }


    // Livre CRUD
    public function add_livre() {

        return view("admin.add_livre");

    }

    public function upload(request $request) {

        $livre = new livre;
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->editeur = $request->editeur;
        $livre->dateEdition = $request->dateEdition;
        $livre->NbrExemplaire = $request->NbrExemplaire;
        $livre->categorie_id = $request->categorie_id;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $path = $image->move(public_path('img'),$imageName);
            $livre->image = $imageName;
        }

        $livre->save();
        return redirect()->back();
    }

    public function view_livre() {

        $Livre = livre::all();
        return view("admin.livres" , compact('Livre'));

    }

    public function delete_livre($id) {
        $data = livre::find($id);
        $data->delete();;
        return redirect()->back();
    }

    public function update_livre($id) {
        $data = livre::find($id);
       return view('admin.update_livre', compact('data'));
    }

    public function edit_livre(Request $request, $id) {
        $data=livre::find($id);
        $data -> titre = $request->titre;
        $data -> auteur = $request->auteur;
        $data -> editeur = $request->editeur;
        $data -> dateEdition = $request->dateEdition;
        $data -> NbrExemplaire = $request->NbrExemplaire;
        $data -> categorie_id = $request->categorie_id;


        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $path = $image->move(public_path('img'),$imageName);
            $data->image = $imageName;
        }

        $data  -> save();
        return redirect('/livres');
    }

    // crud reservation

    public function create_reservation() {
        $data = reservation::all();
        return view("admin.reservation" , compact('data'));
    }

    public function edit_reservation($id) {
        $data = reservation::find($id);
       return view('admin.edit_reservation', compact('data'));
    }

    public function update_reservation(Request $request, $id) {
        $data=reservation::find($id);
        $data->etat = $request->etat;

        $data  -> save();
        return redirect('/reservation_view');
    }

    // crud user
    public function create_user() {
        $data = user::all();
        return view("admin.user" , compact('data'));
    }

    public function destory($id) {
        $data = user::find($id);
        $data->delete();;
        return redirect()->back();
    }

    // crud contact
    public function create_contact() {
        $data = profile::all();
        return view("admin.contact" , compact('data'));
    }

    public function destory_contact($id) {
        $data = profile::find($id);
        $data->delete();;
        return redirect()->back();
    }

}

