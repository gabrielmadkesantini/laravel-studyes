@extends("includes.base")


@section("title", "produtos")

@section('content')
<h3>Mercado negro...</h3>

@if(session('sucesso'))
    <marquee style="height: 100vh, width: 100vw" direction="up" loop='10' scrolldelay="80">
    <img src="{{session('sucesso')}}" alt="">
    </marquee>
@endif

<form action="">
    @csrf
    <input type="text" name="busca">
    <input type="submit" value="Buscar">
</form>

<table border="1">
    <thead>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Editar</th>
        <th>Apagar</th>
    </thead>
    <tbody>

            @foreach($prods as $prod)
            <tr>
            <th><a href="{{route('products.products.view', $prod->id)}}">{{$prod['name']}}</a></th>
            <th>R${{number_format($prod['quantity'], 2, ',', '.')}}</th>
            <th>{{$prod['price']}}</th>
            <th><a href="{{route('products.products.edit', $prod->id)}}">Editar</a></th>
            <th><a href="{{route('products.products.deleteproduct', $prod->id)}}">Apagar<a></th>
        </tr>
            @endforeach

    </tbody>
</table>



<a href="{{route('products.products.add')}}">Adicionar um produto</a>


@endsection
