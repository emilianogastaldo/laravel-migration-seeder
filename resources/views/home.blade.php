@extends('layouts.main')

@section('main-content')
    <table class="table container mt-5">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Città di partenza</th>
            <th scope="col">Città di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Codice carrozza</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>            
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
              <tr>
                <td>{{$train['company']}}</td>
                <td>{{$train['depature_station']}}</td>
                <td>{{$train['arrive_station']}}</td>
                <td>{{"{$train['departure_date']} {$train['departure_time']}"}}</td>
                <td>{{"{$train['arrive_date']} {$train['arrive_time']}"}}</td>
                <td>{{$train['train_code']}}</td>
                <td>{{$train['carriage_code']}}</td>
                <td>{{$train->getInTime()}}</td>                
                <td>{{$train->getDeleted()}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
@endsection