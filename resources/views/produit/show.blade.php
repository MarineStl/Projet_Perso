@extends('layouts.app')


@section('content')

    <h1>Gestion des produits</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $produit->nom }}</td>
        </tr>

        <tr>

            <th>Description:</th>
            <td>{{ $produit->description }}</td>

        </tr>

        <tr>

            <th>Prix:</th>
            <td>{{ $produit->prix }}</td>

        </tr>

        <tr>

            <th>Image:</th>
            <td>{{ $produit->image }}</td>

        </tr>


    </table>

@endsection