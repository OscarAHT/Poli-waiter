@extends('template')
@section('title')
    Status del pedido
@stop

@section('content')
<div class="container d-flex justify-content-center">
  <div class="row mt-2">
    <p>Tu pedido está siendo preparado...</p>  
      <div class="col">
        
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Default striped example" style="width: 800px" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
  </div>
</div>

    
@stop
