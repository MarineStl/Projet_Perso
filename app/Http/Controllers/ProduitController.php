<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    

    /**
     * Affiche la liste des produits
     */
    public function list()
    {

        $produits = Produit::all();
        return view('produit.list', compact('produits'));

    }

    public function categories()
    {

        $produits = Produit::all();
        return view('produit.categories', compact('produits'));

    }

    /**
     * return le formulaire de creation d'un produit
     */
    public function create()
    {

        return view('produit.create');

    }


    /**
     * Enregistre un nouveau produit dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prix'=> 'required',
            'description' => 'required',
            'image' => 'required',

        ]);


        $produit = new Produit([
            'nom' => $request->get('nom'),
            'prix' => $request->get('prix'),
            'description' => $request->get('description'),
            'image' => $request->get('image'),

        ]);


        $produit->save();
        return redirect('/')->with('success', 'Produit Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un produit spécifique
     */

    public function show($id)
    {

        $produit = Produit::findOrFail($id);
        return view('produit.show', compact('produit'));

    }



    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $produit = Produit::findOrFail($id);

        return view('produit.edit', compact('produit'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom'=>'required',
            'prix'=> 'required',
            'description' => 'required',
            'image' => 'required',
        ]);




        $produit = Produit::findOrFail($id);
        $produit->nom = $request->get('nom');
        $produit->prix = $request->get('prix');
        $produit->description = $request->get('description');
        $produit->image = $request->get('image');



        $produit->update();

        return redirect('/')->with('success', 'Produit Modifié avec succès');

    }




    /**
     * Supprime le produit dans la base de données
     */
    public function destroy($id)
    {

        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect('/')->with('success', 'Produit Supprimé avec succès');

    }

}
