@extends('layouts.main')

@section('main-content')

<div>
  @foreach ($trains as $index => $train)
  <p>{{dump($train)}}</p>
  Treno numero {{$index + 1}} :
    @foreach ($train as $key => $value )
      <p>KEY: {{$key}} Value: {{$value}}</p>
    @endforeach
    <hr>
  @endforeach 
</div>
@endsection