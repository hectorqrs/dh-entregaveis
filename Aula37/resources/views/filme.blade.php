<h2>Informações do Filme Favorito</h2>
<ul>
  <li>Título: {{$filme->title}}</li>
  <li>Duração: {{$filme->getDuracao()}}</li>
  <li>Prêmios: {{$filme->getPremios()}}</li>
  <li>Avaliação: {{$filme->getAvaliacao()}}</li>
  <li>Gênero: {{$atores[0]->title}}</li>
</ul>
