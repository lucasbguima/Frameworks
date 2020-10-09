@extends('home')

@section('content')
<div class="products">

@foreach($products as $product)

<div id="p{{$product->id}}">
    <img class="product" src="{{ $product->url }}">
    <p class="title">{{ $product->title }}</p>
    <p class="price">R${{ $product->price }}</p>
    <p class="editar"><a href="/products/{{$product->id}}/edit">Editar Produto</a></p>
</div>

@endforeach

@empty($products)
    <p>Nenhum produto encontrado para listar.</p>
@endempty

</div>
@endsection
