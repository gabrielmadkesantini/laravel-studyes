<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

</head>
<body>
    <h2 class="text-2">
        tu é show
    </h2>
    <hr>
    <div>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('products')}}">Produtos</a></li>
        </ul>
    </div>
@yield('content')
</body>
</html>
