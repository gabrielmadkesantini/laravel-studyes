@extends("includes.base")


@section("title", "produtos")

@section('content')
    <div class='grid-cols-3 '>
        <p>Nome</p>
        <p>Quantidade</p>
        <p>Preço</p>
        <p>Editar</p>
    </div>
    <div class='grid-cols-3 gap-3'>
        @foreach($prods as $prod)

        <p><a href="{{route('products.products.view', $prod->id)}}">{{$prod['name']}}</a></p>
        <p>R${{number_format($prod['quantity'], 2, ',', '.')}}</p>
        <p>{{$prod['price']}}</p>
        <p><a href="{{route('products.products.edit', $prod->id)}}">Editar</a></p>

        @endforeach
    </div class='grid-cols-3 gap-3'>

<p>Mercado negro...</p>
<a href="{{route('products.products.add')}}">Adicionar um produto</a>


@endsection
