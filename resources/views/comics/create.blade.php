@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Aggiungi Fumetto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select" name="type" id="type" required>
                            <option selected>Seleziona un tipo</option>
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo </label>
                        <input type="text" class="form-control" name="price" id="price" required min="1" placeholder="Inserisci il prezzo">
                    </div>
                   
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">
                            Salva
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection