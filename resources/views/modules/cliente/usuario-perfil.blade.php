@extends('layouts/main')

@section('titulo_principal', 'Perfil')

@extends('layouts/header')

@section('contenido')

    <div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

        <div class="row w-100 d-flex justify-content-center p-0 m-0">

            <div class="col-5 col-md-5 col-lg-3 m-0 p-2 bg-dark membrete">
                <x-barraOption></x-barraOption>
            </div>

            <div class="col-12 col-md-7 col-lg-9 p-0 m-0 border-end border-dark bg-violeta-cruzada">

                <div class="container-fluid d-flex justify-content-center align-items-center p-0 m-0 mt-3 mb-3">
                    @if (session('success'))
                        <div class="col-10 col-lg-5 position-absolute">
                            <x-alert type="success">
                                <x-slot name="title">
                                    {{ session('success') }}
                                </x-slot>
                            </x-alert>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="col-10 col-lg-5 position-absolute">
                            <x-alert type="danger">
                                <x-slot name="title">
                                    {{ session('error') }}
                                </x-slot>
                            </x-alert>
                        </div>
                    @endif

                    <div class="row w-100 d-flex justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 p-3 border-radius-10">
                            <div class="container-fluid p-2 d-flex justify-content-center align-items-center">
                                <div>
                                    <img src="{{ asset('assets/img/perfil/'.$user->avatar) }}" alt="Avatar" width="250px" height="250px" class="img-fluid rounded-circle p-1  bg-dark">
                                    <h2 class="text-center mt-3 h2">{{ $user->nombre }}</h2>
                                </div>
                            </div>

                            <div class="container-fluid p-2 d-flex justify-content-between align-items-center mt-3">
                                <ul>
                                    <li class=" list-unstyled h3 mb-3"> <b>Correo:</b> {{  auth()->user()->correo }}
                                    <li class=" list-unstyled h3"> <b>Cedula:</b> {{ $user->cedula }}</li>
                                </ul>
                            </div>


                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>



@endsection
