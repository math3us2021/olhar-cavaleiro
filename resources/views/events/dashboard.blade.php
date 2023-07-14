@extends('layout.main')

@section('title', 'Dashboard');

@section('content')
    <div class="col-md-12" id="search-container">
        <h2>Encontre um cavaleiro de hipismo</h2>
        <form action="/dashboard" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container dashTitle">
        <h2>Relação de Cavaleiros</h2>
        <a href="/users/create" class="btn btn-primary">Cadastrar Usuário</a>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($users) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade de cavalos</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/events/{{ $user->id }}">{{ $user->name }}</a></td>
                        <td>0</td>
                        <td>
{{--                            <a href="/users/edit/{{ $user->id }}" class="btn btn-info edit-btn">--}}
                            <a href="{{ route('users.edit', $user->id ) }}"  class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon>
                                Editar
                            </a>

                            <form action="/users/{{ $user->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon>
                                    Deletar
                                </button>
                            </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Você não tem usuarios cadastrados, <a href="/register">criar cavaleiro</a></p>
        @endif
    </div>

@endsection

