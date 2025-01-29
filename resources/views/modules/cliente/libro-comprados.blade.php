@extends('layouts/main')

@section('titulo_principal', 'Libros del Usuario')

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

                <div class="col-12 col-md-12 col-lg-11">
                    
                    <div
                        class="m-3 p-4 border-radius-5 table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table w-100 table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">titulo </th>
                                    <th scope="col">Autor(a)</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <h2 class="text-dark text-center h4 text-capitalize fontNav">Libros solicitados </h2>
                                @forelse ($facturas as $book)
                                    <tr>
                                        <th scope="row"> {{ $book->title }} </th>
                                        <th scope="row"> {{ $book->autor }} </th>
                                        <th scope="row"> {{ $book->date_buy }} </th>
                                        <td> 
                                            <a href="{{ Route('books.readBooks', $book->id_book) }}" Target="_blank"  class="btn btn-verde icono-abajo btn-sm"><i class="fa-solid fa-file-pdf"></i> Leer </a> </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="3"> No hay libros comprados.</th>
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
