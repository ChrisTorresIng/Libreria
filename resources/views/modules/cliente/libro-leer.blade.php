@extends('layouts/main')

@section('titulo_principal', 'Lectura')

@section('contenido')

<div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

<div class="row w-100 d-flex justify-content-center p-0 m-0">
    <div class="col-12 p-0 m-0 border-end border-dark">
        <div class="container-fluid h-100 d-flex justify-content-center p-0 m-0">
            <div class="row w-100 d-flex justify-content-center p-0 m-0">
                <div class="col-12 p-0 m-0">
                      <embed src="{{ asset('assets/pdf/'.$books->pdf) }}" type="application/pdf" class="hv100 w-100 p-0 m-0" >
                </div>

            </div>
        </div>
    </div>

</div>
</div>



@endsection
