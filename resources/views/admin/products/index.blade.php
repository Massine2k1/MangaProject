@extends('base')
@section('title','Liste des produits')
@section('content')
<h1>@yield('title')</h1>
<table>
  <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Image</th>
    <th>Catégorie</th>
    <th>Offres</th>
  </tr>
  @foreach ($products as $product)      
  <tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->description }}</td>
    <td>Pas encore d'image</td>
    <td>{{ $product->category->name }}</td>
    <td>Voir les prix</td>
  </tr>
  @endforeach
</table>
@endsection
