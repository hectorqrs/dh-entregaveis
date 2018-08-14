<ul>
@foreach($genero->movies()->get() as $value)
  <li>
  {{ $value['title'] }}
</li>
@endforeach
</ul>
