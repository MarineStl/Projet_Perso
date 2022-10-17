@extends('layouts.app')


    @section('content')

        <h1>Gestion des commandes</h1>

    <br>

    <div class="d-flex flex-row justify-content-center border dark">
        <div class="col-4 text-center">
            <a class=" d-block text-4xl text-uppercase text-white bg-dark">Renseignement Client</a><br/>
            <a class="text-2xl text-success">Nom</a>
            <a>{{ $commande->nom }}</a><br/>
            <a class="text-2xl text-success">Prénom</a>
            <a>{{ $commande->prenom }}</a><br/>
            <a class="text-2xl text-success">Mail</a>
            <a>{{ $commande->mail }}</a><br/>
            <a class="text-2xl text-success">Portable</a>
            <a>{{ $commande->portable }}</a><br/>
            <a class="text-2xl text-success">Adresse</a>
            <a>{{ $commande->adresse }}</a><br/>
            <a class="text-2xl text-success">Complément d'adresse</a>
            <a>{{ $commande->complement }}</a><br/>
            <a class="text-2xl text-success">Ville</a>
            <a>{{ $commande->ville }}</a><br/>
            <a class="text-2xl text-success">Code</a>
            <a>{{ $commande->code }}</a><br/>
        </div>

        <div class="col-4 text-center">
            <a class="d-block text-4xl text-uppercase text-white bg-dark">Renseignement Produit</a><br/>
            <a class="text-2xl text-success">Produits</a>
            <a>{{ $commande->produit }}</a><br/>
            <a class="text-2xl text-success">Quantité</a>
            <a>{{ $commande->quantite }}</a><br/>
            <a class="text-2xl text-success">Prix</a>
            <a>{{ $commande->prix }}</a><br/>
            <a class="text-2xl text-success">TTC</a>
            <a>{{ $commande->ttc }}</a><br/>
            <a class="text-2xl text-success">Prix TTC</a>
            <a>{{ $commande->ttc }}</a><br/>
            <a class="text-2xl text-success">Paiement</a>
            <a>{{ $commande->paiement }}</a><br/>
        </div>
    </div>
    </br>
        <div class="flex text-center col-10  justify-center">
            <input type="checkbox" id="click" onclick='AfficherCacher("MonTexte1"); return false'>Adresse de facturation<br/>

            <div id="MonTexte1" style="display:none">
                <a class="text-2xl text-success">Nom</a>
                <a>{{ $commande->nombis }}</a><br/>
                <a class="text-2xl text-success">Prénom</a>
                <a>{{ $commande->prenombis }}</a><br/>
                <a class="text-2xl text-success">Adresse de livraison</a>
                <a>{{ $commande->adressebis }}</a><br/>
                <a class="text-2xl text-success">Complément d'adresse</a>
                <a>{{ $commande->complementbis }}</a><br/>
                <a class="text-2xl text-success">Code Postal</a>
                <a>{{ $commande->codebis }}</a><br/>
                <a class="text-2xl text-success">Ville</a>
                <a>{{ $commande->villebis }}</a><br/>
            </div>
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
</div>
@endsection
