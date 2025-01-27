<x-mail::message>
# Solicitud de Cambio de contraseña

<x-mail::panel>
Estimado usuario {{ $usuario->nombre}}, su solicitud para cambiar la contraseña se ha aprobado satisfactoriamente, por favor presionar el botón
en la parte inferior para llenar el formulario y cambiar a su nueva contraseña.
</x-mail::panel>


<x-mail::button :url="route('users.enviarNuevaClave', $usuario->id)"
    color="success">
Has click para cambiar la contraseña
</x-mail::button>
</x-mail::message>
