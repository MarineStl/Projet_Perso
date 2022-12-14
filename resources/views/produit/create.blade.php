@extends('layouts.app')


@section('content')

    <h1>Ajouter un produit</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('produit') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Entrez une description" name="description">
        </div>

        <div class="form-group mb-3">
            <label for="prix">Prix:</label>
            <input type="number" class="form-control" id="prix" placeholder="Entrez un prix" name="prix">
        </div>

        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" placeholder="" name="image">
        </div>

        <button type="submit" class="btn btn-outline-info">Enregister</button>

    </form>

@endsection