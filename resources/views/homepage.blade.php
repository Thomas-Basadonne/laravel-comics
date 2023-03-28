@extends('layout.app')

@section('main')
<div class="container my-5">
    <h1 class="fs-2 fw-900 badge bg-primary text-white">CURRENT SERIES</h1>

    <div class="row row-cols-6 gy-4 my-2">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comic['series'] }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection   


