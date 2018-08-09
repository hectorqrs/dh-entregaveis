<!-- <?php
  echo "<ul>";
    foreach ($filmes as $posicao => $filme) {
      echo "<li>";
      echo $filme;
      echo "</li>";
    }
  echo "</ul>";
?> -->
<ul>
@foreach($filmes as $posicao => $filme)
<li>
{{ $filme->getTitulo() }}
</li>
@endforeach
</ul>
