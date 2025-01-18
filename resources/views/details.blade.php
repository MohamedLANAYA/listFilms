@extends('template')

@section('content')
<div class="card mx-auto shadow" style="max-width: 400px;">
    <img src="{{ asset('images/' . $film['src']) }}" alt="{{ $film['titre'] }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 200px; height: 200px; object-fit: cover;">
    <div class="card-body text-center">
        <h3 class="card-title">{{ $film['titre'] }}</h3>
        <p class="card-text">Date : {{ $film['date'] }}</p>
        <p class="card-text">Type : {{ $film['type'] }}</p>
        <a href="/films" class="btn btn-primary mt-3">Retour</a>
    </div>
</div>
@endsection
