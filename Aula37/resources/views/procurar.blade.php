@if(count($atores) > 0)
<h1>Ator Encontrado</h1>
<ul>
@foreach ($atores as $ator)
  <li>{{$ator->getNomeCompleto()}}</li>
@endforeach
</ul>
@else
<h1>Ator Não Encontrado</h1>
@endif
<form action="/atores" method="get">
  <input type="submit" value="Limpar">
</form>
