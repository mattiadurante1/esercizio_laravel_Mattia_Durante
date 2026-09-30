<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }} ">

</head>
<body>
      <nav>
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('contatti') }}">contatti</a>
        <a href="{{ route('chi-siamo') }}">chi siamo</a>
        <a href="{{ route('news') }}">news</a>
    </nav>

  <h1> il titolo è: {{ $title }}</h1>
  <h5>{{ $description }}</h5>
</body>
</html>