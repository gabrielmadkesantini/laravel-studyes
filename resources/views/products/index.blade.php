@extends("includes.base")


@section("title", "produtos")

@section('content')
<h3>Mercado negro...</h3>

@if(session('sucesso'))
<div style="backgorund-color: rgb(182, 182, 182)"; color:greenYellow>
    <marquee style="height: 250px" direction="up" loop='1'>

    {{session('sucesso')}}

    </marquee>
</div>
@endif

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
