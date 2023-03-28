@extends('layout.app')

@section('main')
<div class="container my-5">
    <h1 class="fs-2 fw-900 badge bg-primary text-white">CURRENT SERIES</h1>

    <div class="row row-cols-4">
        @foreach ($comics as $comic)
        <div class="my-card">
            <div class="card-details p-5 my-3">
                {{-- <img src="{{ $comic['thumb'] }}" alt=""> --}}
                <img src="https://picsum.photos/400/500" alt="">
                <p>{{ $comic['series'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection   