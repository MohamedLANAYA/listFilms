@extends('template')

@section('content')
<div class="row g-4">
    @foreach ($data as $film)
        <div class="col-md-3 d-flex justify-content-center">
            <a href="{{ url('/detail/' . $film['src']) }}">
                <img src="{{ asset('images/' . $film['src']) }}" class="card-img-top rounded-circle shadow" alt="{{ $film['titre'] }}" style="width: 150px; height: 150px; object-fit: cover;">
            </a>
        </div>
    @endforeach
</div>
@endsection
