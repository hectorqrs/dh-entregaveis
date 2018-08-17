<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @if(isset($sucesso) && $sucesso)
      <h3>Filme Adicionado com sucesso!</h3>
    </br>
  @endif
  @foreach($atores as $ator)
    {{$ator->getNomeCompleto()}}
    <a href="/actor/form_edit/{{$ator->id}}">Editar</a>
    -
    <a href="/actor/delete/{{$ator->id}}">Deletar</a>
  </br>
@endforeach
{{$atores->links()}}
  </body>
</html>
