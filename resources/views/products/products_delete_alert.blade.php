@extends("includes.base")


@section('content')
<h1>Deseja mesmo deletar esse produto?</h1>
<form action="{{route('products.products.deleteproductforeal', $prod->id)}}" method="POST">
    @csrf
    <button type="submit">Confirmar</button>
</form>
<button><a href="{{route('products')}}"></a> Cancelar</button>
@endsection
