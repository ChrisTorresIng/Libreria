@extends('layouts/main')

@section('titulo_principal', 'Registro de Sesión')
@section('clase_Body', 'bg-violeta')

@section('contenido')

    <div class="container-fluid p-3 p-md-5 p-lg-5 h-100 d-flex justify-content-center align-items-center">
        <div class="container-fluid h-100 d-flex justify-content-center">

            <div class="row w-100 h-100 d-flex justify-content-center">
                <div
                    class="col-12 col-md-5 col-lg-5 ps-lg-3 pe-lg-3 m-0 d-flex justify-content-center align-items-center bg-light border-n-radius-5 box-shawdow-black">
                    <div class="container m-0">

                        @if (session('success'))
                            <x-alert type="success">
                                <x-slot name="title">
                                    {{ session('success') }}
                                </x-slot>
                            </x-alert>
                        @endif
                        @if (session('error'))
                            <x-alert type="danger">
                                <x-slot name="title">
                                    {{ session('error') }}
                                </x-slot>
                            </x-alert>
                        @endif
                        <div class="w-100 d-flex justify-content-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                style="width: 100px; margin:0px" alt="logo">
                        </div>
                        <h2 class="text-center h5 mb-3">Registro de sesión</h2>
                        <div class="w-100 d-flex justify-content-center">
                            <form method="post" class="w-100" action="{{ Route('users.store') }}">
                                @csrf
                                @method('POST')
                                <div class="form-group d-block d-md-flex d-lg-flex">
                                    <label for="nombre" class="me-3 w-100">Nombre:
                                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese..."
                                            value="{{ old('nombre') }}" class="form-control">
                                        <span class="m-0 p-0 text-danger">
                                            @error('nombre')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </label>

                                    <label for="cedula" class="w-100">Cedula:
                                        <input type="text" name="cedula" id="cedula" placeholder="Ingrese..."
                                            value="{{ old('cedula') }}" class="form-control">
                                        <span class="m-0 p-0 text-danger">
                                            @error('cedula')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </label>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="correo">Correo Electrónico:</label> <br>
                                    <input type="email" name="correo" id="correo" placeholder="Ingrese..."
                                        class="form-control" value="{{ old('correo') }}">
                                    <span class="m-0 p-0 text-danger">
                                        @error('correo')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password">Contraseña:</label> <br>
                                    <input type="password" name="clave" id="clave" placeholder="Ingrese..."
                                        class="form-control" value="{{ old('clave') }}">
                                    <span class="m-0 p-0 text-danger">
                                        @error('clave')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group mt-3 d-flex justify-content-center">
                                    <input type="submit" value="Registrar" class="btn btn-violeta w-50 p-2">
                                </div>

                                <div class="form-group mt-4 mb-3 d-flex justify-content-center align-items-center">
                                    <span>¿Ya posee cuenta?</span>
                                    <a href="{{ route('users.index') }}" class="ms-2 m-0 p-2 btn btn-outline-azul h6">
                                        Abrir
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-5 p-0 m-0 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/logo3.jpg') }} " alt="fondo"
                        class="w-100 h-100 m-0 p-0 d-block border-s-radius-5">
                </div>

            </div>

        </div>



    </div>



@endsection
