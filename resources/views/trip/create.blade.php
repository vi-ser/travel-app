@extends('layouts.app') 

@section('content')
<div class="container py-5">
    <h1 class="fs-2 mb-5">Aggiungi viaggio</h1>

    <form action="{{route('trips.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" required
            rows="4"  style="height: auto"></textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image">Immagine di copertina</label>
            <input type="file" class="form-control" name="cover_image" id="cover_image" required>
        </div>
        <div class="mb-3">
            <label for="start" class="form-label">Data di inizio</label>
            <input type="date" class="form-control" name="start" id="start" required>
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">Data di fine</label>
            <input type="date" class="form-control" name="end" id="end" required>
        </div>

        <button type="submit" class="my-btn-primary border-0 mt-3">Aggiungi</button>
    </form>

</div>
    
@endsection
