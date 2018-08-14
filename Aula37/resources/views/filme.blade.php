<h2>Informações do Filme Favorito</h2>
<ul>
  <li>Título: {{$filme->title}}</li>
  <li>Duração: @if($filme->getDuracao() == null)Nulo @else{{$filme->getDuracao()}}@endif</li>
  <li>Prêmios: {{$filme->getPremios()}}</li>
  <li>Avaliação: {{$filme->getAvaliacao()}}</li>
  <li>Gênero: @if(isset($filme->genero->name)){{$filme->genero->name}} @else Nulo @endif</li>
</ul>

<h2>Lista de filmes de Atores que Participaram deste filme</h2>
<ul>
  @foreach ($atores as $ator)
    <li>{{$ator->first_name}}</li>
  @endforeach
</ul>
