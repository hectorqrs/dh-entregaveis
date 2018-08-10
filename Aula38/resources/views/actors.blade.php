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
