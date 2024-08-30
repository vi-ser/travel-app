@extends('layouts.app') 

@section('content')
<div class="container py-5">
    
    <h1 class="fs-4 fw-bold mb-4">{{ $trip->title }}</h1>
    

    

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la trip</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              Sei sicuro che vuoi eliminare "{{$trip->title}}"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('trips.destroy', $trip->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

          </div>
        </div>
    </div>

    <div class="img-container w-100 mb-4 position-relative">
        <img src="{{ asset('storage/' . $trip->cover_image) }}"
            alt="{{ $trip['name'] }}" class="w-100 object-fit-cover rounded-3" style="height: 400px">
    </div>

    <p class="mb-5">{{$trip->description}}</p>

    <div class="date d-flex gap-5 mb-4">
        <div class="start">
            <span class="fw-bold">Partenza</span>
            <p>{{ \Carbon\Carbon::parse($trip->start_date)->translatedFormat('d F Y') }}</p>
        </div>
        <div class="end">
            <span class="fw-bold">Rientro</span>
            <p>{{ \Carbon\Carbon::parse($trip->end_date)->translatedFormat('d F Y') }}</p>
        </div>
    </div>

    

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-trash"></i> Elimina
    </button>



</div>
    
@endsection
