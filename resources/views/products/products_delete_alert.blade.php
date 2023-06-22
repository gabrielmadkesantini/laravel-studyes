@extends("includes.base")


@section('content')
<h1>Deseja mesmo deletar esse produto?</h1>
<form action="POST">
    <button>Confirmar</button>
</form>
<button><a href="{{route('products')}}"></a> Cancelar</button>
@endsection
