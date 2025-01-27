@extends('layouts/main')

@section('titulo_principal', 'Solicitud de olvido de contraseña')
@section('clase_Body', 'bg-violeta')

@section('contenido')

    <div
        class="container-fluid p-3 w100h100 h-100 border border-2 bg-violeta d-flex justify-content-center align-items-center">
        {{-- contenedor --}}
        <div class="container-fluid h-100 d-flex justify-content-center">
            <div class="row w-100 h-100 d-flex justify-content-center mt-lg-5">
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

                <div class="col-12 col-md-4 col-lg-4 p-4 m-0 d-flex justify-content-center align-items-center bg-light border-n-radius-5 box-shawdow-black">
                    <div class="container">

                        <div class="w-100 d-flex justify-content-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                style="width: 150px; margin:0px" alt="logo">
                        </div>
                        <h2 class="text-center h5 mb-3"><b>Olvido de Contraseña</b></h2>
                        <p class="text-secondary"> Ingrese el correo en el cual se enviará la petición de recuperar contraseña</p>
                        <div class="w-100 d-flex justify-content-center">
                            <form method="post" class="w-100" action="{{ Route('users.recuperar') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <label for="correo" class="me-3 w-100">Correo Electrónico:
                                        <input type="email" name="correo" id="correo" placeholder="Ingrese..."
                                            class="form-control" value="{{ old('correo') }}">
                                        <span class="m-0 p-0 text-danger">
                                            @error('correo')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </label>
                                </div>

                                <div class="form-group mt-3 d-flex justify-content-center">
                                    <input type="submit" value="Enviar" class="btn btn-violeta w-50 p-2">
                                </div>

                                <div class="form-group mt-4 mb-3 d-flex justify-content-center align-items-center">
                                    <span>¿Desea volver?</span>
                                    <a href="{{ route('users.index') }}" class="ms-2 m-0 p-2 btn btn-outline-azul h6">
                                        Abrir
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>

@endsection
