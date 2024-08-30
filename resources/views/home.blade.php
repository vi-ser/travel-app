@extends('layouts/app')

@section('content')

<div class="background">
    <div class="container">
     <div class="row">
        <div class="col-12 d-flex gap-5 align-items-lg-center flex-column flex-lg-row" style="margin-top:120px">
            <div class="header-text">
                <h1 class="display-1 fw-bold text-white">
                    Esplora,
                </h1>
                <h1 class="display-1 fw-bold text-white">
                    Ricorda,
                </h1>
                <h1 class="display-1 fw-bold text-white mb-4">
                    Condividi.
                </h1>
            </div>
    
            <div class="cta">
                <p class="text-white mb-4">
                    Documenta ogni tappa, dai momenti indimenticabili alle piccole curiosità, creando un racconto unico delle tue avventure. Conservalo per sempre, condividilo con chi vuoi, e rivivi ogni emozione ogni volta che lo desideri. 
                </p>
                <a href="{{ route('trips.index')}}" class="my-btn-secondary text-decoration-none" >
                   Comincia il tuo viaggio
                </a>
            </div> 
            
            
        </div>
     </div>


    </div>

</div>


@endsection