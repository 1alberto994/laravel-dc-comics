@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna indietro
                </a>
            </div>
        </div>
        <div class="row g-3">
            <div class="col mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection