@extends('layouts/main')

@section('titulo_principal', 'Libro')

@extends('layouts/header')

@section('contenido')

    <div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

        <div class="row w-100 d-flex justify-content-center p-0 m-0">

            <div class="col-5 col-md-5 col-lg-3 m-0 p-2 bg-dark membrete">
                <x-barraOption></x-barraOption>
            </div>

            <div class="col-12 col-md-7 col-lg-9 p-0 m-0 border-end border-dark">
                <div class="container-fluid bg-fondo1 d-flex justify-content-center align-items-center p-2 m-0">
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

                        @if (session('error'))
                            <div class="col-10 col-lg-5 position-absolute">
                                <x-alert type="danger">
                                    <x-slot name="title">
                                        {{ session('error') }}
                                    </x-slot>
                                </x-alert>
                            </div>
                        @endif
                        <h1 class="text-center text-white fontNav bg-negro-transparente p-2 ps-5 pe-5 border-radius-5">
                            LIBROS
                        </h1>
                    </div>
                </div>

                <div class="container-fluid d-flex justify-content-center align-items-center p-0 m-0 mt-5 mb-3">
                    <div class="row w-100 p-2 d-flex justify-content-center">

                        {{-- cuadro donde se mostraran los libros --}}
                            <div class="col-12 col-md-10 col-lg-10 mt-3">
                                <div class="col-12 p-1 d-flex justify-content-center align-items-center">
                                    <a href=" {{ route('books.index')}}">Volver a la página anterior</a>
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="row w-100">
                                        <div
                                            class="col-12 col-md-5 col-lg-5 p-3 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/img/imgLibros/'.$book->front_page) }}"
                                                class="m-0 p-0 w-100 h-100">
                                        </div>
                                        <div class="col-12 col-md-7 col-lg-7 p-2 d-flex justify-content-center align-items-start">
                                            <ul>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"> {{$book->title}}</p>
                                                </li>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"><b>Año:</b> {{$book->publication_year}}</p>
                                                </li>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"><b>Categoría:</b> {{$book->category}}</p>
                                                </li>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"><b>Autor(a):</b> {{$book->autor}}</p>
                                                </li>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"><b>Idioma:</b> {{$book->language}}</p>
                                                </li>
                                                <li class="list-unstyled">
                                                    <p class="m-0 p-0"><b>Sinopsis:</b> {{$book->description}}</p>
                                                </li>
                                                <li class="mt-2 list-unstyled">
                                                    <p class="m-0 p-0">
                                                        <form action="{{ Route('books.shoop') }}" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <input type="hidden" name="idUser" id="idUser" value="{{ $user->id }}">
                                                            <input type="hidden" name="idBook" id="idBook" value="{{ $book->id }}">
                                                            <button type="submit" class="btn btn-naranja w-100"><i class="fa-solid fa-cart-plus"></i> Comprar  <b>{{ $book->costo}}</b></button>
                                                        </form> 
                                                    </p>
                                                </li>
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



@endsection
