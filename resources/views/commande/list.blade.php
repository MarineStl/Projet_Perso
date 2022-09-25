@extends('dashboard')

@section('content')
    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des commandes</h2>

        </div>

        
        <div class="col-lg-1">
            <a class="btn btn-outline-success" href="{{ url('commande/create') }}">Ajouter</a>
        </div>
    </div>

 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

 

    <table class="table table-bordered">

        <tr>

            <th class="px-2 py-2 w-1/4">No</th>
            <th class="px-2 py-2 w-1/4">Nom</th>
            <th class="px-2 py-2 w-1/4">Prénom</th>
            <th class="px-2 py-2 w-1/4">Mail</th>
            <th class="px-2 py-2 w-1/4">Portable</th>
            <th class="px-2 py-2 w-1/4">Adresse</th>
            <th class="px-2 py-2 w-1/4">Complément</th>
            <th class="px-2 py-2 w-1/4">Ville</th>
            <th class="px-2 py-2 w-1/4">Code</th>
            <th class="px-2 py-2 w-1/4">Produit</th>
            <th class="px-2 py-2 w-1/4">Quantité</th>
            <th class="px-2 py-2 w-1/4">Prix</th>
            <th class="px-2 py-2 w-1/4">TTC</th>
            <th class="px-2 py-2 w-1/4">Paiement</th>

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
                        <div class="d-grid gap-2">
                             <a class="btn btn-outline-warning" href="{{ url('commande/'. $commande->id) }}">Voir</a>
                             <a class="btn btn-outline-info" href="{{ url('commande/'. $commande->id .'/edit') }}">Modifier</a>

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </div>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection

