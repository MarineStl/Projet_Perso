<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    /**
     * Affiche la liste des commandes
     */
    public function list()
    {

        $commandes = Commande::all();
        return view('commande.list', compact('commandes'));

    }


    /**
     * return le formulaire de creation d'une commande
     */
    public function create()
    {

        return view('commande.create');

    }


    /**
     * Enregistre une nouvelle commande dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'mail'=>'required',
            'portable'=> 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'complement' => 'required',
            'code' => 'required',
            'ville' => 'required',
            'produit' => 'required',
            'quantite' => 'required',
            'prix' => 'required',
            'ttc' => 'required',
            'paiement' => 'required',
            'nombis' => 'required',
            'prenombis' => 'required',
            'adressebis' => 'required',
            'complementbis' => 'required',
            'codebis' => 'required',
            'villebis' => 'required'
            

        ]);


        $commande = new Commande([
            'mail' => $request->get('mail'),
            'portable' => $request->get('portable'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'adresse' => $request->get('adresse'),
            'complement' => $request->get('complement'),
            'code' => $request->get('code'),
            'ville' => $request->get('ville'),
            'produit' => $request->get('produit'),
            'quantite' => $request->get('quantite'),
            'prix' => $request->get('prix'),
            'ttc' => $request->get('ttc'),
            'paiement' => $request->get('paiement'),
            'nombis' => $request->get('nombis'),
            'prenombis' => $request->get('prenombis'),
            'adressebis' => $request->get('adressebis'),
            'complementbis' => $request->get('complementbis'),
            'codebis' => $request->get('codebis'),
            'villebis' => $request->get('villebis')

        ]);


        $commande->save();
        return redirect('/')->with('success', 'Commande Ajoutée avec succès');

    }


    /**
     * Affiche les détails d'une commande spécifique
     */

    public function show($id)
    {

        $commande = Commande::findOrFail($id);
        return view('commande.show', compact('commande'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $commande = Commande::findOrFail($id);

        return view('commande.edit', compact('commande'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'mail'=>'required',
            'portable'=> 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'complement' => 'required',
            'code' => 'required',
            'ville' => 'required',
            'produit' => 'required',
            'quantite' => 'required',
            'prix' => 'required',
            'ttc' => 'required',
            'paiement' => 'required'
        ]);




        $commande = Commande::findOrFail($id);
        $commande->mail = $request->get('mail');
        $commande->portable = $request->get('portable');
        $commande->nom = $request->get('nom');
        $commande->prenom = $request->get('prenom');
        $commande->adresse = $request->get('adresse');
        $commande->complement = $request->get('complement');
        $commande->code = $request->get('code');
        $commande->ville = $request->get('ville');
        $commande->produit = $request->get('produit');
        $commande->quantite = $request->get('quantite');
        $commande->prix = $request->get('prix');
        $commande->ttc = $request->get('ttc');
        $commande->paiement = $request->get('paiement');


        $commande->update();

        return redirect('/')->with('success', 'Commande Modifiée avec succès');

    }




    /**
     * Supprime la commande dans la base de données
     */
    public function destroy($id)
    {

        $commande = Commande::findOrFail($id);
        $commande->delete();

        return redirect('/')->with('success', 'Commande Supprimée avec succès');

    }

}
