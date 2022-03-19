@extends('layouts.main')

@section('title', 'Events - Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus eventos:</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a id="event_title" href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>0</td>
                            <td><a class="btn btn-primary" href="#">Editar</a> <a class="btn btn-primary" href="#">Deletar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não possui eventos cadastrados, <a href="/events/criar">criar evento</a></p>
        @endif
    </div>

@endsection