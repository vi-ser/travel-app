@extends('layouts.app') 

@section('content')
<div class="container py-5">
    <h1 class="fs-2">I miei viaggi</h1>

    @if($trips->isEmpty())
    <p>Non ci sono viaggi presenti.</p>
    @else
        <div class="row">
            @foreach($trips as $trip)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trip->title }}</h5>
                            <p class="card-text">{{ $trip->description }}</p>
                            <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-primary">Visualizza Viaggio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
    
@endsection