@extends("includes.base")


@section("title", "produtos")

@section('content')
<table border="1">
    <thead>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Preço</th>
    </thead>
    <tbody>
        @foreach($prods as $prod)
        <tr>
            <td>{{$prod['name']}}</td>
            <td>R${{number_format($prod['quantity'], 2, ',', '.')}}</td>
            <td>{{$prod['price']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Mercado negro...</p>
<a href="{{route('products.products.add')}}">Adicionar um produto</a>


@endsection
