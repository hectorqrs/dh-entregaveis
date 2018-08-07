<form  action="{{ url('/atores/search') }}" method="post">
  @csrf
  <input type="text" name="nome" value="">
  <input type="submit" value="Enviar">
</form>

<ul>
  @foreach($atores as $ator)
  <li><a href="/filme/{{$ator->id}}">{{$ator->getNomeCompleto()}}</a></li>
  @endforeach
</ul>
