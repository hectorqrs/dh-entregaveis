<ul>
  @foreach ($collection as $key => $value)
    <li>{{$value->title}}</li>
  @endforeach
</ul>
