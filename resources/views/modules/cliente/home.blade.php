@extends('layouts/main')

@section('titulo_principal', 'Home')

@extends('layouts/header')

@section('contenido')

    <div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

        <div class="row w-100 d-flex justify-content-center p-0 m-0">

            <div class="col-5 col-md-5 col-lg-3 m-0 p-2 bg-dark membrete">
                <x-barraOption></x-barraOption>
            </div>

            <div class="col-12 col-md-7 col-lg-6 p-0 m-0 border-end border-dark">
                <div class="container-fluid bg-fondo1 d-flex justify-content-center align-items-center p-5 m-0">
                    <div class="mt-5 mb-5">
                        @if (session('success'))
                            <div class="col-10 col-lg-5 position-absolute">
                                <x-alert type="success">
                                    <x-slot name="title">
                                        {{ session('success') }}
                                    </x-slot>
                                </x-alert>
                            </div>
                        @endif
                        <h1 class="text-center text-white fontNav bg-negro-transparente p-5 border-radius-5">
                            Bienvenido a la página principal de MOON READ
                        </h1>
                    </div>
                </div>

                <div class="container-fluid bg-danger d-flex justify-content-center align-items-center p-0 m-0 mt-5 mb-3">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active p-0">
                                <img src="{{ asset('assets/img/fondo4.jpg') }}" class="d-block w-100 p-0 m-0"
                                    height="500px">
                                <div class="carousel-caption d-none d-md-block bg-negro-transparente-blus">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/fondo2.jpg') }}" class="d-block w-100 p-0 m-0"
                                    height="500px">
                                <div class="carousel-caption d-none d-md-block bg-negro-transparente-blus">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/fondo3.jpg') }}" class="d-block w-100" height="500px">
                                <div class="carousel-caption d-none d-md-block bg-negro-transparente-blus">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-2 col-lg-3 p-3 m-0 bg-light">
                <x-infort></x-infort>
            </div>

        </div>
    </div>



@endsection
