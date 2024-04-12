@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

<style>
  body {
    margin: 0;
    padding: 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin: 50px 0;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  .cabecalho {
    background-color: red;
    color: white;
  }
</style>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>

    <p class="subtitle">Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt=" {{ $event->title }}">

                <div class="card-body">
                    <p class="card-date">10/09/2020</p>

                    <h5 class="card-title">{{ $event->title }}</h5>

                    <h5 class="card-city">Evento será realizado em {{ $event->city }}</h5>

                    <h5 class="card-private">
                      @if($event->private == 0)
                        Aberto ao público
                      @else
                        Fechado ao público
                      @endif
                    </h5>

                    <h5 class="card-description">{{ $event->description }}</h5>

                    <p class="card-participants">X Participantes</p>

                    <!-- <a href="#" class="btn btn-primary">Saber mais</a> -->
                </div>
            </div>
        @endforeach
    </div>
</div>    

@endsection