@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Treni</h1>
        <div class="col-12 d-flex flex-wrap">
            @foreach ($trains as $train)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title mb-4">{{ $train->Azienda }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->Stazione_di_arrivo }}</h6>
                  <p class="card-text mb-3">{{ $train->Orario_di_arrivo }}</p>
                  <p class="card-text">{{ $train->Stazione_di_partenza }}</p>
                  <p class="card-text mb-3">{{ $train->Orario_di_partenza }}</p>
                  @if ( $train->In_orario == true)
                    <p class="card-text bg-success">in orario</p>
                  @else 
                    <p class="card-text bg-danger">in ritardo</p>
                  @endif
                </div>
              </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection
