@extends('layouts/main')

@section('titulo_principal', 'Registro Libros | Editar')

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
                        <div class="col-12 col-md-11 col-lg-12">
                            <h2 class="text-dark text-center h4 text-capitalize fontNav">Editar {{ $book->title}} </h2>
                            @if (session('success'))
                                <div class="col-12 mb-2 mt-2">
                                    <x-alert type="success">
                                        <x-slot name="title">
                                            {{ session('success') }}
                                        </x-slot>
                                    </x-alert>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="col-12 mb-2 mt-2">
                                    <x-alert type="danger">
                                        <x-slot name="title">
                                            {{ session('error') }}
                                        </x-slot>
                                    </x-alert>
                                </div>
                            @endif


                            <div class="m-3 p-4 bg-light box-shawdow-black border-radius-5">

                                <form action="{{ Route('books.update', $book->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group d-inline-block d-md-inline-block d-lg-flex">
                                        <label for="title" class="w-100 me-3">titulo:
                                            <input type="text" name="title" id="title" placeholder="Ingrese..."
                                                class="form-control w-100" maxlength="120" value="{{ old('title', $book->title) }}">
                                            <span class="m-0 p-0 text-danger">
                                                @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                        <label for="costo" class="w-100">Precio:
                                            <input type="text" name="costo" id="costo" placeholder="Ingrese..."
                                                class="form-control w-100" maxlength="120" value="{{ old('costo', $book->costo) }}">
                                            <span class="m-0 p-0 text-danger">
                                                @error('costo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                    </div>

                                    <div class="form-group d-inline-block d-md-inline-block d-lg-flex">
                                    
                                        <label for="author" class="w-100 me-3">Autor:
                                            <input type="text" name="autor" id="autor" placeholder="Ingrese..."
                                                class="form-control w-100" maxlength="30" value="{{ old('autor', $book->autor) }}">
                                            <span class="m-0 p-0 text-danger">
                                                @error('autor')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                        <label for="publication_year" class="me-3 w-100">Año publicación:
                                            <input type="date" name="publication_year" id="publication_year" class="form-control"
                                                value="{{ old('publication_year', $book->publication_year) }}">
                                            <span class="m-0 p-0 text-danger">
                                                <span class="m-0 p-0 text-danger">
                                                    @error('publication_year')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </span>
                                        </label>

                                        <label for="category" class="w-100 me-3">Categoria:
                                            <select name="category" id="category" class="form-select">
                                                <option value="{{ old('category', $book->category) }}"> <b>Seleccionado: {{ old('category', $book->category) }}</b> {{ old('publication_year', $book->category) }}</option>
                                                <option value="Fantasía">Fantasía</option>
                                                <option value="Ciencia Ficción">Ciencia Ficción</option>
                                                <option value="Misterio">Misterio</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Terror">Terror</option>
                                                <option value="Aventura">Aventura</option>
                                                <option value="Ficción histórica">Ficción histórica</option>
                                                <option value="Ensayo">Ensayo</option>
                                            </select>
                                            <span class="m-0 p-0 text-danger">
                                                @error('category')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                        <label for="language" class="w-100 me-3">Idioma:
                                            <select name="language" id="language" class="form-select">
                                                <option value="{{ old('language', $book->language) }}"><b>Seleccionado: </b> {{ old('language', $book->language) }}</option>
                                                <option value="Español">Español</option>
                                                <option value="Ingles">Ingles</option>
                                                <option value="Frances">Frances</option>
                                                <option value="Japones">Japones</option>
                                            </select>
                                            <span class="m-0 p-0 text-danger">
                                                @error('language')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                    </div>

                                    <div class="form-group mt-3 d-inline-flex d-md-flex d-lg-flex">
                                        <label for="clave" class="w-100">
                                            <textarea name="description" id="description" cols="80" rows="1" placeholder="Sinopsis" class="me-2 form-control-plaintext bg-white p-3">{{ old('description', $book->description) }}</textarea>
                                            <span class="m-0 p-0 text-danger">
                                                @error('description')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>

                                        <label for="front_page" class="me-3 w-100">Portada:
                                            <input type="file" name="front_page" id="front_page" class="form-control"
                                                value="{{ old('front_page',$book->front_page) }}">
                                            <span class="m-0 p-0 text-danger">
                                                <span class="m-0 p-0 text-danger">
                                                    @error('front_page')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-group mt-3 d-flex justify-content-center">
                                        <input type="submit" value="Registrar" class="btn btn-outline-warning w-50 p-2">
                                    </div>

                                    <div class="form-group mt-3 mb-3 d-flex justify-content-center">
                                        <a href="{{ Route('books.inventario') }}" class="text-violeta"> Volver</a>
                                    </div>


                                </form>
                            </div>


                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>



@endsection
