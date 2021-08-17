@component('mail::message')
Hola **{{$user->name}} {{$user->lastname}}**,  {{-- use double space for line break --}}
Gracias por confiar en nosotros.

**Información de respaldo**  

Identificación: {{ $user->identification }}
Empresa: {{ $business->name }}
Código Respaldo: {{ $back->backcode }}

Saludos cordiales,
    Equipo de CargoSeguros.
@endcomponent