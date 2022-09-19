@extends('layouts.app')


@section('content')

    <h1>Ajouter une commande</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('commande') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrez un prenom" name="prenom">
        </div>

        <div class="form-group mb-3">
            <label for="mail">Mail:</label>
            <input type="text" class="form-control" id="mail" placeholder="Entrez un mail" name="mail">
        </div>

        <div class="form-group mb-3">
            <label for="portable">Portable:</label>
            <input type="text" class="form-control" id="portable" placeholder="Entrez un portable" name="portable">
        </div>

        <div class="form-group mb-3">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" placeholder="Entrez une adresse" name="adresse">
        </div>

        <div class="form-group mb-3">
            <label for="complement">Complément:</label>
            <input type="text" class="form-control" id="complement" placeholder="Entrez un complement" name="complement">
        </div>

        <div class="form-group mb-3">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" placeholder="Entrez une ville" name="ville">
        </div>
        
        <div class="form-group mb-3">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" placeholder="Entrez un code postal" name="code">
        </div>

        <div class="form-group mb-3">
            <label for="produit">Produit:</label>
            <input type="text" class="form-control" id="produit" placeholder="Entrez un produit" name="produit">
        </div>

        <div class="form-group mb-3">
            <label for="quantite">Quantite:</label>
            <input type="number" class="form-control" id="quantite" placeholder="Entrez une quantité" name="quantite">
        </div>

        <div class="form-group mb-3">
            <label for="prix">Prix:</label>
            <input type="text" class="form-control" id="prix" placeholder="Entrez un prix" name="prix">
        </div>

        <div class="form-group mb-3">
            <label for="ttc">TTC:</label>
            <input type="text" class="form-control" id="ttc" placeholder="TTC" name="ttc">
        </div>

        <div class="form-group mb-3">
            <label for="paiement">Paiement:</label>
            <input type="text" class="form-control" id="paiement" placeholder="Entrez un moyen de paiement" name="paiement">
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection