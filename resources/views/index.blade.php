<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>sistema de busqueda!!</h1>
        <form action="{{route('index')}}" method="post">
            @csrf
            <label>ingresa tu nombre:</label>
            <input type="text" name="name" placeholder="Nombre">
            <label>ingresa tu CP:</label>
            <input type="number" name="cp" placeholder="CP">
            <input type="submit" value="buscar">
        </form>
        <br>
        <hr>
        @yield('tabla')
        @yield('direccion')
        @yield('dato')
        <hr>
</body>
</html>
