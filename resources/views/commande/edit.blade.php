@extends('layouts.app')


@section('content')


    <h1>Modifier une commande</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('commande/'. $commande->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom" value="{{ $commande->nom }}">
        </div>

        <div class="form-group mb-3">

            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrez un prenom" name="prenom" value="{{ $commande->prenom }}">
        </div>

        <div class="form-group mb-3">
            <label for="mail">Mail:</label>
            <input type="email" class="form-control" id="mail" placeholder="Entrez un mail" name="mail" value="{{ $commande->mail }}">
        </div>

        <div class="form-group mb-3">
            <label for="portable">Portable:</label>
            <input type="tel" class="form-control" id="portable" placeholder="Entrez un numéro" name="portable" value="{{ $commande->portable }}">
        </div>

        <div class="form-group mb-3">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" placeholder="Entrez une adresse" name="adresse" value="{{ $commande->adresse }}">
        </div>

        <div class="form-group mb-3">
            <label for="complement">Complément:</label>
            <input type="text" class="form-control" id="complement" placeholder="Entrez un complement" name="complement" value="{{ $commande->complement }}">
        </div>

        <div class="form-group mb-3">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" placeholder="Entrez un code postal" name="code" value="{{ $commande->code }}">
        </div>

        <div class="form-group mb-3">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" placeholder="Entrez une ville" name="ville" value="{{ $commande->ville }}">
        </div>

        <div class="form-group mb-3">
            <label for="produit">Produit:</label>
            <input type="text" class="form-control" id="produit" placeholder="Entrez un produit" name="produit" value="{{ $commande->produit }}">
        </div>

        <div class="form-group mb-3">
            <label for="quantite">Quantite:</label>
            <input type="number" class="form-control" id="quantite" placeholder="Entrez une quantite" name="quantite" value="{{ $commande->quantite }}">
        </div>

        <div class="form-group mb-3">
            <label for="prix">Prix:</label>
            <input type="text" class="form-control" id="prix" placeholder="Entrez un prix" name="prix" value="{{ $commande->prix }}">
        </div>

        <div class="form-group mb-3">
            <label for="ttc">TTC:</label>
            <input type="text" class="form-control" id="ttc" placeholder="TTC" name="ttc" value="{{ $commande->ttc }}">
        </div>

        <div class="form-group mb-3">
            <label for="paiement">Paiement:</label>
            <input type="text" class="form-control" id="paiement" placeholder="Entrez un moyen de paiement" name="paiement" value="{{ $commande->paiement }}">
        </div>

        <button type="submit" class="btn btn-outline-primary">Enregistrer</button>

    </form>

@endsection