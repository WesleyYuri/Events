@extends('layouts.main')

@section('title', 'Events - Criar evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" required/>
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required/>
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" required/>
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required/>
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select class="form-control" name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?" required></textarea>
            </div>
            <div class="form-group">
                <label>Adicione items de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras" /> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco" /> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open bar" /> Open bar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open food" /> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes" /> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>

@endsection