@extends('layouts.main')

@section('main-content')

<ul>
  @foreach ($trains as $train)
  <li>
    {{$train['company']}}
  </li>
  @endforeach
</ul>
<table class="table">
  <thead>
    <tr>
      @foreach ($trains as $key => $train)
      <th scope="col">{{$train}}</th>
      @foreach ($train as $key => $value )

      @endforeach

      @endforeach

    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
@endsection