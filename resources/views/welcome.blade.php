@extends('layout.main')

@section('title', 'HDV Events')

@section('content')

    <div class="col-md-12" id="search-container">
        <h2>Busque um evento de hipismo</h2>
        <form action="/events" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div class="col-md-12" id="event-container">
        <div class="row justify-between dashTitle">
            @if($search)
                <h2>Buscando por: {{ $search }}</h2>
            @else
                <h2>Próximos eventos</h2>
            @endif
            <a href="/events/create" class="btn btn-primary">Criar evento</a>
        </div>

        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div class="row" id="cards-container">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/horseD.png" alt="horse">
                    <h5 class="card-body">{{ $event->title }}</h5>
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <div class="row">
                        <a href="/events/{{ $event->id }}" class="btn btn-primary ">Saber mais</a>
                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </form>
                        <a href="/events/edit/{{ $event->id }}" class="btn btn-primary edit-btn">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                    </div>

                </div>
            @endforeach

            @if(count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </div>

@endsection
