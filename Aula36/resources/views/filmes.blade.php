@foreach ($filmes as $posicao => $filme)
  @if($id == $posicao)
    @php
      $resultado = $filme;
      break;
    @endphp
  @else
    @php
      $resultado = "O filme não existe";
    @endphp
  @endif
@endforeach

{{ $resultado }}
