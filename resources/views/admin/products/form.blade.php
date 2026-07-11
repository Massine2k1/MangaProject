@extends('base')
@section('title', $product->exists ? 'Editer un produit':'Ajouter un produit');
@section('content')
<h1>@section('title')</h1>
<form action="{{ route($product->exists ? 'admin.product.edit' : 'admin.product.create',$product) }}" method="post">
    
</form>
@endsection