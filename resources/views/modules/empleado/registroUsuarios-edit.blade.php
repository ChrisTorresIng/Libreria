@extends('layouts/main')

@section('titulo_principal', 'Registro Usuarios | editar')

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
                            <h2 class="text-dark text-center h4 text-capitalize fontNav">Editar de usuarios</h2>
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

                                <form action="{{ Route('usuarios.update', $usuario) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group d-inline-block d-md-inline-block d-lg-flex">
                                        <label for="name" class="w-100 me-3">Nombre:
                                            <input type="text" name="nombre" id="nombre" placeholder="Ingrese..." value="{{ old('nombre', $usuario->nombre) }}" class="form-control w-100" maxlength="80">
                                                <span class="m-0 p-0 text-danger">
                                                    @error('nombre')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                        </label>
                                        <label for="cedula" class="w-100">Cedula:
                                            <input type="text" name="cedula" id="cedula" placeholder="Ingrese..." value="{{ old('cedula', $usuario->cedula) }}" class="form-control w-100" maxlength="8">
                                            <span class="m-0 p-0 text-danger">
                                                @error('cedula')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="correo" class="w-100">Correo Electrónico:
                                            <input type="email" name="correo" id="correo" placeholder="Ingrese..." value="{{ old('correo', $usuario->correo) }}" class="form-control" maxlength="100">
                                            <span class="m-0 p-0 text-danger">
                                                @error('correo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>
                                    </div>

                                    <label for="rol" class="mt-3 mb-1">Rol: 
                                        <span class="m-0 p-0 text-danger">
                                            @error('rol')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </label>
                                    <div class="form-group d-inline-block d-lg-flex">

                                        @if ($usuario->rol == 'Usuario')
                                            <label for="rolU">Usuario: </label>
                                            <input type="radio" name="rol" id="rolU" value="Usuario"
                                                class="form-check ms-1 me-3" checked>
                                            <label for="rolE">Empleado: </label>
                                            <input type="radio" name="rol" id="rolE" value="Empleado"
                                                class="form-check ms-1 me-3">
                                            <label for="rolA">Administrador: </label>
                                            <input type="radio" name="rol" id="rolA" value="Administrador"
                                                class="form-check ms-1 me-3">
                                        @elseif($usuario->rol == 'Empleado')
                                            <label for="rolU">Usuario: </label>
                                            <input type="radio" name="rol" id="rolU" value="Usuario"
                                                class="form-check ms-1 me-3">
                                            <label for="rolE">Empleado: </label>
                                            <input type="radio" name="rol" id="rolE" value="Empleado"
                                                class="form-check ms-1 me-3" checked>
                                            <label for="rolA">Administrador: </label>
                                            <input type="radio" name="rol" id="rolA" value="Administrador"
                                                class="form-check ms-1 me-3">
                                        @elseif($usuario->rol == 'Administrador')
                                            <label for="rolU">Usuario: </label>
                                            <input type="radio" name="rol" id="rolU" value="Usuario"
                                                class="form-check ms-1 me-3">
                                            <label for="rolE">Empleado: </label>
                                            <input type="radio" name="rol" id="rolE" value="Empleado"
                                                class="form-check ms-1 me-3">
                                            <label for="rolA">Administrador: </label>
                                            <input type="radio" name="rol" id="rolA" value="Administrador"
                                                class="form-check ms-1 me-3" checked>
                                        @endif

                                    </div>

                                    <div class="form-group mt-3 d-flex justify-content-center">
                                        <input type="submit" value="Actualizar" class="btn btn-naranja w-50 p-2">
                                    </div>

                                    <div class="form-group mt-3 mb-3 d-flex justify-content-center">
                                        <a href=" {{ Route('usuarios.index') }} " class="text-violeta"> Volver</a>
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
