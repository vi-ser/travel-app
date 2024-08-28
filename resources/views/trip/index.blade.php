@extends('layouts.app') 

@section('content')
<div class="container py-5">
    <div class="d-flex align-items-center gap-2 mb-3">
        <h1 class="fs-2 mb-1">I miei viaggi</h1>
        <a href="{{ route('trips.create')}}" class="my-btn-round text-decoration-none"><i class="bi bi-plus-circle"></i></a>
    </div>

    @if($trips->isEmpty())
    <p>Non ci sono viaggi presenti.</p>
    @else
        <div class="row">
            @foreach($trips as $trip)
                <div class="col-12 col-md-6 col-lg-3 ">
                    <a href="{{ route('trips.show', $trip->id) }}"  class="card my-card rounded-4 border-0 my-card mb-4 text-decoration-none">
                        <img class="cover-img" src="{{ asset('storage/' . $trip->cover_image) }}" alt="{{ $trip->title }}">

                        <div class="card-body">
                            <h6 class="card-title mb-0">{{ $trip->title }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

</div>
    
@endsection
