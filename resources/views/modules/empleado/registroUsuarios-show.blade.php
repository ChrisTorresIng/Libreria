@extends('layouts/main')

@section('titulo_principal', 'Registro Usuarios | Show')

@extends('layouts/header')

@section('contenido')

    <div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

        <div class="row w-100 d-flex justify-content-center p-0 m-0">

            <div class="col-5 col-md-5 col-lg-3 m-0 p-2 bg-dark membrete">
                <x-barraOption></x-barraOption>
            </div>

            <div class="col-12 col-md-7 col-lg-9 p-0 m-0 border-end border-dark">

                <div class="container-fluid h-100 bg-violeta d-flex justify-content-center p-3 m-0 pt-lg-5 mb-3">
                    <div class="row w-100 d-flex justify-content-center">
                        <div class="col-12 col-md-11 col-lg-10">
                            <h2 class="text-dark text-center h4 text-capitalize fontNav">Información personal del usuario </h2>

                            <div class="m-3 p-4 bg-light box-shawdow-black border-radius-5">

                                <div class="container-fluid">
                                    <div class="col-12 mb-3 d-flex justify-content-end">
                                        <a href="{{ route('usuarios.index')}} " class="link-secondary">Volver a la pagina anterior</a>
                                    </div>
                                    <div class="row w-100">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <img src="{{ asset('assets/img/user.png') }}" class="w-100 h-100 p-2 border-2 border border-radius-5">
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid mt-3">
                                    <div class="row w-100">
                                        <div class="col-12 col-md-8 col-lg-10">
                                            <ul class="m-0 p-0">
                                                
                                                <li class="h4 list-unstyled m-0 p-0 mb-2"><b>Nombre:</b> {{ $usuario->nombre }}</li>
                                                <li class="h4 list-unstyled m-0 p-0 mb-2"><b>Correo:</b> {{ $usuario->correo }}</li>
                                                <li class="h4 list-unstyled m-0 p-0 mb-2"><b>Cedula:</b> {{ $usuario->cedula }}</li>
                                                <li class="h4 list-unstyled m-0 p-0 mb-2"><b>Rol:</b> {{ $usuario->rol }}</li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>



@endsection
