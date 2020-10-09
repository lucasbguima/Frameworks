@extends('home')

@section('content')
    <div class="form">
    <p class="form">Você está editando o produto {{$product->title}}!</p>

    <form class="form" method="post" action="/products/{{$product->id}}">
    @method('PUT')
    @csrf
    <input type="text" name="title" placeholder="Nome do Produto" autocomplete="off" class="form" />
    <input type="text" name="url" placeholder="Url da Imagem do Produto" autocomplete="off" class="form" />
    <input  type="number" step="0.01" name="price" placeholder="Preço do Produto" autocomplete="off" class="form" />
    <button id="btn" type="submit" class="form">Editar Produto</button>
    </form>
    <p class="form">Deseja excluir o Produto {{$product->title}}?</p>
    <div class="form">
        <form class="form" method="post" action="/products/{{$product->id}}">
        @method('delete')
        @csrf
        <button id="btn" type="submit" class="form">Deletar Produto</button>
        </form>
    </div>
    <a class="form" href="/products"> Retornar à pagina de Produtos </a>
    </div>

@endsection