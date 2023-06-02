@extends('includes.base')

@section('title', 'Visualizar produtos')

@section('content')
@foreach ($prods as $prods)

@endforeach
<h2>{{$prod->name}}</h2>
@endsection
