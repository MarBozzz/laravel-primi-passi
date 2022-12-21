<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Chi siamo</title>
</head>
<body>
  <ul>
    @foreach ($fruits as $fruit)
      <li>
        {{$fruit}}
      </li>
    @endforeach
  </ul>
  <a class="btn" href="/">PAGINA 1</a>
</body>
</html>
