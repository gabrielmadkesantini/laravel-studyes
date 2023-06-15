@extends('includes.base')

@section('title', 'Visualizar produtos')

@section('content')
@foreach ($prods as $prod)

@endforeach
<p>{{$prods->name}}</p>
<p>{{$prods->price}}</p>
<p>{{$prods->quantity}}</p>

@endsection
