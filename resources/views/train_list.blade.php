@extends('layout.app')

@section('page-title','train')

@section('content')

    @foreach($departureTrains as $train)
        <div class="card">
            <div>Train code: {{$train['train_code']}}</div>
            <h3>Stazione di partenza: {{$train['departure_station']}}</h3>
            <h3>Stazione d'arrivo: {{$train['arrival_station']}}</h3>
            <h4>Orario di partenza: {{$train['departure_time']}}</h4>
            <h4>Orario di arrivo: {{$train['arrival_time']}}</h4>        
        </div>
    @endforeach
        
@endsection