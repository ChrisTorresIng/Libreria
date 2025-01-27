@extends('layouts/main')

@section('titulo_principal', 'Registro Libros')

@extends('layouts/header')

@section('contenido')

    <div class="container-fluid w-100 h-100 d-flex justify-content-center m-0 p-0">

        <div class="row w-100 d-flex justify-content-center p-0 m-0">

            <div class="col-5 col-md-5 col-lg-3 m-0 p-2 bg-dark membrete">
                <x-barraOption></x-barraOption>
            </div>

            <div class="col-12 col-md-7 col-lg-9 p-0 m-0 border-end border-dark">

                <div class="container-fluid h-100 d-flex justify-content-center p-3 m-0 pt-5 mb-3">

                    <div class="row w-100 d-flex justify-content-center">
                        @if (session('success'))
                            <div class="col-7 position-absolute">
                                <x-alert type="success">
                                    <x-slot name="title">
                                        {{ session('success') }}
                                    </x-slot>
                                </x-alert>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="col-7 position-absolute">
                                <x-alert type="danger">
                                    <x-slot name="title">
                                        {{ session('error') }}
                                    </x-slot>
                                </x-alert>
                            </div>
                        @endif
                        <div class="d-flex justify-content-end">
                            {{ $books->links() }}
                        </div>
                        <div class="col-12 col-md-12 col-lg-11">
                            <h2 class="text-dark text-center h4 text-capitalize fontNav">Libros Registrados</h2>
                            <div
                                class="m-3 p-4 bg-light box-shawdow-black border-radius-5 table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table w-100 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">titulo </th>
                                            <th scope="col">Autor(a)</th>
                                            <th scope="col">Sinopsis</th>
                                            <th scope="col">Año</th>
                                            <th scope="col" colspan="2"><a href="{{ Route('books.create') }}"
                                                    class="btn btn-verde btn-sm w-100"><i class="fa-solid fa-book"></i>
                                                    Crear</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($books as $book)
                                            <tr>
                                                <th scope="row">
                                                    {{ $book->title }} </th>
                                                <td>
                                                    {{ $book->autor }}
                                                </td>
                                                <td> {{ $book->description }} </td>
                                                <td> {{ $book->publication_year }} </td>
                                                <td> <a href="{{ Route('books.edit', $book) }}" class="btn btn-naranja icono-abajo btn-sm"><i class="fa-solid fa-user-pen"></i> Editar</a> </td>
                                                <td>
                                                    <form action="{{ Route('books.destroy', $book) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-rojo icono-abajo btn-sm"><i
                                                                class="fa-solid fa-trash-can"></i> Borrar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th colspan="6"> No hay libros registrados.</th>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
