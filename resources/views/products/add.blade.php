@extends("includes.base")


@section("title", "produtos")

@section('content')
<p>Mercado negro...</p>
<form action="{{route('products.products.addSave')}}", method="POST" style="width: 400px;">
    @csrf
    <fieldset>
        <legend >My form</legend>
<input type="email" name="email" placeholder="Email">
<br>
<input type="password" name="pass" placeholder="Password">
<br>
<input type="number" name="price" placeholder="Price" step="3">
<br>
<input type="number" name="quant" placeholder="Quantity">
<br>
<button type='submit'>Submit</button>
</fieldset>
</form>
@endsection
