@extends("includes.base")


@section("title", "produtos")

@section('content')
<p>Mercado negro...</p>

@if($errors)
@foreach ($errors->all() as $err)
{{$err}}<br>
@endforeach
@endif


<form action="{{url()->current()}}
"method="POST" style="width: 400px;">
    @csrf
    <fieldset>
        <legend>My form</legend>
        <input type="text" name="name" placeholder="Email" value="{{old('name', $prod->name ?? '')}}">
        <br>
        <input type="password" name="pass" placeholder="Password" >
        <br>
        <input type="number" name="price" placeholder="Price" step="2" value="{{old('price', $prod->price ?? '')}}">
        <br>
        <input type="number" name="quantity" placeholder="Quantity" value="{{old('quantity', $prod->quantity ?? '')}}">
        <br>
        <button type='submit'>Submit</button>
    </fieldset>
</form>
@endsection
