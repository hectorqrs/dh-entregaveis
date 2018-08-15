<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    @foreach ($atores as $ator)
      {{ $ator->first_name }}<br>
    @endforeach
    {{$atores->links()}}
  </body>
</html>
