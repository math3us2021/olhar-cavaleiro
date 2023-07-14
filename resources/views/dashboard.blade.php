{{--@extends('layout.main')--}}

{{--@section('title', 'Dashboard');--}}

{{--@section('content')--}}
{{--    <div class="col-md-12" id="search-container">--}}
{{--        <h1>Encontre um cavaleiro de hipismo</h1>--}}
{{--        <form action="/dashboard" method="GET">--}}
{{--            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="col-md-12" id="event-container">--}}
{{--        --}}{{--        @if($search)--}}
{{--        --}}{{--            <h2>Buscando por: {{ $search }}</h2>--}}
{{--        --}}{{--        @else--}}
{{--        --}}{{--        @endif--}}
{{--        --}}{{--        <p class="subtitle">Veja os eventos dos próximos dias</p>--}}
{{--        --}}{{--        <div class="row" id="cards-container">--}}
{{--        --}}{{--            @foreach($events as $event)--}}
{{--        --}}{{--                <div class="card col-md-3">--}}
{{--        --}}{{--                    <img src="/img/horseD.png" alt="horse">--}}
{{--        --}}{{--                    <h5 class="card-body">{{ $event->title }}</h5>--}}
{{--        --}}{{--                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>--}}
{{--        --}}{{--                    <p class="card-participants">X participantes</p>--}}
{{--        --}}{{--                    <a href="/events/{{ $event->id }}" class="btn btn-primary ">Saber mais</a>--}}

{{--        --}}{{--                </div>--}}
{{--        --}}{{--            @endforeach--}}

{{--        --}}{{--            @if(count($events) == 0 && $search)--}}
{{--        --}}{{--                <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>--}}
{{--        --}}{{--            @elseif(count($events) == 0)--}}
{{--        --}}{{--                <p>Não há eventos disponíveis</p>--}}
{{--        --}}{{--            @endif--}}
{{--    </div>--}}
{{--    <div class="col-md-10 offset-md-1 dashboard-title-container">--}}
{{--        <h1>Meus Eventos</h1>--}}
{{--        <a href="/users/create" class="btn btn-primary">Cadastrar Usuário</a>--}}
{{--    </div>--}}
{{--    <div class="col-md-10 offset-md-1 dashboard-events-container">--}}
{{--        @if(count($users) > 0)--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">#</th>--}}
{{--                    <th scope="col">Nome</th>--}}
{{--                    <th scope="col">Quantidade de cavalos</th>--}}
{{--                    <th scope="col">Ações</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($users as $user)--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{ $loop->index + 1 }}</th>--}}
{{--                        <td><a href="/events/{{ $user->id }}">{{ $user->name }}</a></td>--}}
{{--                        <td>0</td>--}}
{{--                        <td>--}}
{{--                            <a href="/users/edit/{{ $user->id }}" class="btn btn-info edit-btn">--}}
{{--                                <ion-icon name="create-outline"></ion-icon>--}}
{{--                                Editar--}}
{{--                            </a>--}}

{{--                            <form action="/users/{{ $user->id }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" class="btn btn-danger delete-btn">--}}
{{--                                    <ion-icon name="trash-outline"></ion-icon>--}}
{{--                                    Deletar--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        @else--}}
{{--            <p>Você não tem usuarios cadastrados, <a href="/events/create">criar evento</a></p>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--@endsection--}}

