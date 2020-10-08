@extends('home')

@section('content')
    <div class="form">
    <p class="form">Bem vindo ao cadastro de produtos!</p>

    <form class="form" method="post" action="/products">
    @csrf
    <input type="text" name="name" placeholder="Nome do Produto" autocomplete="off" class="form" /><br/>
    <input type="text" name="url" placeholder="Url da Imagem do Produto" autocomplete="off" class="form" /><br/>
    <input type="float" name="price" placeholder="Preço do Produto" autocomplete="off" class="form" /><br/>
    <button id="btn" type="submit" class="form">Cadastrar Produto</button>
    </form>

    <a class="form" href="/products"> Retornar à pagina de Produtos </a>
    </div>
@endsection