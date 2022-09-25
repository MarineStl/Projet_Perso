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
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" placeholder="Entrez une adresse" name="adresse">
        </div>

        <div class="form-group mb-3">
            <label for="complement">Complément:</label>
            <input type="text" class="form-control" id="complement" placeholder="Entrez un complement" name="complement">
        </div>
        
        <div class="form-group mb-3">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" placeholder="Entrez un code postal" name="code">
        </div>

        <div class="form-group mb-3">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" placeholder="Entrez une ville" name="ville">
        </div>

        <!-- checkbox du JS pour afficher/enlever l'adresse de livraison si différente-->
        <input type="checkbox" id="click" onclick='AfficherCacher("MonTexte1"); return false'> Adresse de livraison différente<br/>

        <!-- div du formulaire adresse différente -->

        <div id="MonTexte1" style="display:none" class="col-md-6 right">

                  <label value="Adresse de livraison">

                <div class="form-group mb-3">
                    <label for="nombis">Nom :</label>
                    <input type="text" class="form-control" id="nombis" placeholder="Entrez un nom" name="nombis">
                </div>

                <div class="form-group mb-3">
                    <label for="prenombis">Prénom:</label>
                    <input type="text" class="form-control" id="prenombis" placeholder="Entrez un prenom" name="prenombis">
                </div>
        
                <div class="form-group mb-3">
                    <label for="adressebis">Adresse:</label>
                    <input type="text" class="form-control" id="adressebis" placeholder="Entrez une adresse" name="adressebis">
                </div>

                <div class="form-group mb-3">
                    <label for="complementbis">Complément:</label>
                    <input type="text" class="form-control" id="complementbis" placeholder="Entrez un complement" name="complementbis">
                </div>
        
                <div class="form-group mb-3">
                    <label for="codebis">Code:</label>
                    <input type="text" class="form-control" id="codebis" placeholder="Entrez un code postal" name="codebis">
                </div>

                <div class="form-group mb-3">
                    <label for="villebis">Ville:</label>
                    <input type="text" class="form-control" id="villebis" placeholder="Entrez une ville" name="villebis">
                </div>

            <script type="text/javascript">

                function AfficherCacher(texte) 
                {
                var test = document.getElementById(texte).style.display;
                if (test == "block") 
                {
                    document.getElementById(texte).style.display = "none";

                }
                else 
                {
                    document.getElementById(texte).style.display = "block";
                    document.getElementById('click').checked = true;

                }
            }

            </script>
        </div>
                     
        <div class="row">
            <div class="col">
                <label for="mail">Mail:</label>
                <input type="email" class="form-control" id="mail" placeholder="Entrez un mail" name="mail">
            </div>
                  
             <div class="col">
                 <label for="portable">Portable:</label>
                 <input type="tel" class="form-control" id="portable" placeholder="Entrez un numéro" name="portable">
            </div>
        </div>
                  
        <div class="row">
            <div class="col">
                <label for="produit">Produit:</label>
                <input type="text" class="form-control" id="produit" placeholder="Entrez un produit" name="produit">
            </div>
                    
            <div class="col">
                <label for="quantite">Quantite:</label>
                <input type="number" class="form-control" id="quantite" placeholder="Entrez une quantité" name="quantite">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="prix">Prix:</label>
                <input type="text" class="form-control" id="prix" placeholder="Entrez un prix" name="prix">
            </div>

        <div class="col">
                <label for="ttc">TTC:</label>
                <input type="text" class="form-control" id="ttc" placeholder="TTC" name="ttc">
            </div>
        </div>

        <br>

        <div class="form-group mb-3">
            <label for="paiement">Paiement:</label>
            <select class="custom-select">
            <option selected>Choisir un moyen de paiement</option>
            <option value="1">CB</option>
            <option value="2">Espèces</option>
            <option value="3">Chèque</option>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-info">Enregister</button>

    </form>

@endsection