@extends('dashboard')

@section('content')
<div class="row">

<div class="col-lg-11">

    <h2>Gestion des produits</h2>

</div>


<div class="col-lg-1">
    <a class="btn btn-outline-success" href="{{ url('produit/create') }}">Ajouter</a>
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
    <th class="px-2 py-2 w-1/4">Description</th>
    <th class="px-2 py-2 w-1/4">Prix</th>
    <th class="px-2 py-2 w-1/4">Image</th>


</tr>

@foreach ($produits as $list => $produit)

    <tr>
        <td>{{ $list }}</td>
        <td>{{ $produit->nom }}</td>
        <td>{{ $produit->description }}</td>
        <td>{{ $produit->prix }}</td>
        <td>{{ $produit->image }}</td>


        <td>

            <form action="{{ url('produit/'. $produit->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="d-grid gap-2">
                     <a class="btn btn-outline-warning" href="{{ url('produit/'. $produit->id) }}">Voir</a>
                     <a class="btn btn-outline-info" href="{{ url('produit/'. $produit->id .'/edit') }}">Modifier</a>

                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </div>

            </form>
        </td>

    </tr>

@endforeach
</table>

@endsection
