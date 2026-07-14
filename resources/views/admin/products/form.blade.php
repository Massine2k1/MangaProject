@extends('base')
@section('title', $product->exists ? 'Editer un produit':'Ajouter un produit')
@section('content')
<h1>@yield('title')</h1>
<form action="{{ route($product->exists ? 'admin.product.update' : 'admin.product.store',$product) }}" method="post">
    @csrf
    @include('shared.input', ['label'=>'Nom','name'=>'name','value'=>$product->name])
    @include('shared.input', ['type'=>'textarea','label'=>'Description','name'=>'description','value'=>$product->name])
    @include('shared.select',['label'=>'Catégorie','name'=>'category_id','value'=>$product->category_id,'category'=>$category])
    <button type="submit">{{ $product->exists ? 'Modifier' : 'Ajouter' }}</button>
</form>
@endsection