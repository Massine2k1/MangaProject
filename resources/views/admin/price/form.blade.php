@extends('base')
@section('title',"Ajout d'une offre pour ". $product->name)
@section('content')
<h1>@yield('title')</h1>
<form action="" method="post">
    @csrf
    @include('shared.select',['label'=>'Boutiques','name'=>'store_id','category'=> $store])
    @include('shared.input',['label'=>'URL','name'=>'url_product'])
    @include('shared.input',['label'=>'Prix','name'=>'price'])
    <button type="submit">Ajouter une offre</button>
</form>
@endsection