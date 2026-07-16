@extends('base')
@section('title', "Fiche produit de ".$product->name )
@section('content')

<h1>@yield('title')</h1>
<div>
    <h2>Image:</h2>
    <p>Pas encore d'image</p>
</div>
<div>
    <h2>Description :</h2>
    <p>{{ $product->description }}</p>
</div>
<div>
    <h2>Catégorie : <span>{{ $product->category->name }}</span></h2>
</div>
<div>
    <div>
        <h3>Boutiques et offres</h3>
        <table>
            <tr>
                <th>Liste des Boutiques</th>
                <th>Liste des offres</th>
            </tr>
            <tr>
                <td>Ca arrive tqt</td>
                <td>Ca arrive tqt</td>
            </tr>
        </table>
    </div>
    <a href="{{ route('admin.price.create',$product) }}">Ajouter une offre</a>
</div>
@endsection
