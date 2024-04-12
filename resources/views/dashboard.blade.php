@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count(events > 0))
        @else
            <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
        @endif
    </div>

    <!-- @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt=" {{ $event->title }}">

                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>

                    <h5 class="card-title">{{ $event->title }}</h5>

                    <p class="card-participants">X Participantes</p>

                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach -->

@endsection