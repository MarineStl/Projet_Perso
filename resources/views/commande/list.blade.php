@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des commandes</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('commande/create') }}">Ajouter</a>
        </div>

    </div>

 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

 

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Portable</th>
            <th>Adresse</th>
            <th>Complément</th>
            <th>Ville</th>
            <th>Code</th>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>TTC</th>
            <th>Paiement</th>

        </tr>

        @foreach ($commandes as $list => $commande)

            <tr>
                <td>{{ $list }}</td>
                <td>{{ $commande->nom }}</td>
                <td>{{ $commande->prenom }}</td>
                <td>{{ $commande->mail }}</td>
                <td>{{ $commande->portable }}</td>
                <td>{{ $commande->adresse }}</td>
                <td>{{ $commande->complement }}</td>
                <td>{{ $commande->ville }}</td>
                <td>{{ $commande->code }}</td>
                <td>{{ $commande->produit }}</td>
                <td>{{ $commande->quantite }}</td>
                <td>{{ $commande->prix }}</td>
                <td>{{ $commande->ttc }}</td>
                <td>{{ $commande->paiement }}</td>

                <td>

                    <form action="{{ url('commande/'. $commande->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('commande/'. $commande->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('commande/'. $commande->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection