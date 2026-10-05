<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('contatti') }}">contatti</a>
        <a href="{{ route('chi-siamo') }}">chi siamo</a>
        <a href="{{ route('articoli') }}">articoli</a>
    </nav>
    <h1>{{$title}}</h1>
</body>
</html>