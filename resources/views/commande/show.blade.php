@extends('layouts.app')


@section('content')

    <h1>Gestion des commandes</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $commande->nom }}</td>
        </tr>

        <tr>

            <th>Prénom:</th>
            <td>{{ $commande->prenom }}</td>

        </tr>

        <tr>

            <th>Mail:</th>
            <td>{{ $commande->mail }}</td>

        </tr>

        <tr>

            <th>Portable:</th>
            <td>$ {{ $commande->portable }}</td>

        </tr>

        <tr>

        <th>Adresse:</th>
        <td>$ {{ $commande->adresse }}</td>

        </tr>

        <tr>

        <th>Complément:</th>
        <td>$ {{ $commande->complement }}</td>

        </tr>

        <tr>

        <th>Ville:</th>
        <td>$ {{ $commande->ville }}</td>

        </tr>

        <tr>

        <th>Code:</th>
        <td>$ {{ $commande->code }}</td>

        </tr>

        <tr>

        <th>Produit:</th>
        <td>$ {{ $commande->produit }}</td>

        </tr>

        <tr>

        <th>Quantité:</th>
        <td>$ {{ $commande->quantite }}</td>

        </tr>

        <tr>

        <th>Prix:</th>
        <td>$ {{ $commande->Prix }}</td>

        </tr>

        <tr>

        <th>TTC:</th>
        <td>$ {{ $commande->ttc }}</td>

        </tr>

        <tr>

        <th>Paiement:</th>
        <td>$ {{ $commande->paiement }}</td>

        </tr>

    </table>

@endsection