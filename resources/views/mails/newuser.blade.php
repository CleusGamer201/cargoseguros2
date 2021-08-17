@component('mail::message')
**{{$user->name}}, {{$user->lastname}}** Se ha Registrado en CargoSeguros-  {{-- use double space for line break --}}
A la espera de su confirmación de registro.

**Información de Usuario**  

Identificación: {{ $user->identification }}
Nombre: {{ $user->name }}, {{ $user->lastname }}
Nombre: {{ $user->name }}, {{ $user->lastname }}

Saludos cordiales,
    Equipo de CargoSeguros.
@endcomponent