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
                <div class="col-lg-6">
                    <div class="card rounded-4 my-card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trip->title }}</h5>
                            <p class="card-text">{{ $trip->description }}</p>
                            <a href="{{ route('trips.show', $trip->id) }}" class="my-btn-primary text-decoration-none">Visualizza Viaggio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>
    
@endsection
