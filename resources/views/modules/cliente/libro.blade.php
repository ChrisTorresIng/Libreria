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
                        <div class="col-12 col-md-10 col-lg-10 d-flex justify-content-center">
                            <form action="{{ Route('books.search') }}" method="POST" class="w-100">
                                @csrf
                                @method('POST')
                                <div class=" d-flex form-group w-100">
                                    <input type="search" name="title" id="title" placeholder="Buscar libro"
                                        class="form-control border-0 border-bottom w-100 me-2">
                                    <button type="submit" class="btn btn-outline-success"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>

                        {{-- cuadro donde se mostraran los libros --}}
                        <div class="container-fluid mt-3 mb-2 d-flex justify-content-end pe-4">
                            {{ $books->links() }}
                        </div>

                        @forelse ($books as $book)
                            <div class="col-12 col-md-10 col-lg-10 mt-3">
                                <div class="container-fluid p-3">
                                    <div class="row w-100">
                                        <div
                                            class="col-12 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <h2 class="h5"> {{ $book->title }} </h2>
                                        </div>
                                        <div
                                            class="col-6 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"><b>Autor(a):</b> {{$book->autor}} </p>
                                        </div>

                                        <div
                                            class="col-6 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"><b>Idioma:</b> {{$book->language}}</p>
                                        </div>
                                        <div
                                            class="col-12 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"><b>Año de publicación:</b> {{$book->publication_year}}</p>
                                        </div>

                                        <div
                                            class="col-12 col-md-5 col-lg-5 border border-2 p-3 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/img/imgLibros/'.$book->front_page) }}"
                                                class="m-0 p-0 w-100 h-100">
                                        </div>
                                        <div
                                            class="col-12 col-md-7 col-lg-7 border border-2 p-2 d-flex justify-content-center align-items-start">

                                            <p class="m-0 p-0"><b>Sinopsis:</b> {{$book->description}}</p>
                                        </div>

                                        <div
                                            class="col-6 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"><b>Categoría:</b> {{$book->category}}</p>
                                        </div>
                                        <div
                                            class="col-6 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"><b>Fomato:</b> PDF</p>
                                        </div>
                                        <div
                                            class="col-12 col-md-4 col-lg-4 border border-2 p-2 d-flex justify-content-center align-items-center">
                                            <p class="m-0 p-0"> <a href=" {{ route('books.show', $book->id)}} " class="btn btn-naranja"><i
                                                        class="fa-solid fa-cart-plus"></i> Comprar</a></p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        @empty
                            <h2>no hay libros</h2>
                        @endforelse

                    </div>

                </div>

            </div>

        </div>
    </div>



@endsection
