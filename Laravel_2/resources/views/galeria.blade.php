@extends('layouts.plantilla')

@section('cabecera')

    <h1>Galeria</h1>

@endsection


@section('infoGeneral')

<p>Aquí iria el contenido principal de la página</p>

@if (count($alumnos))

    <table colspan="50%" border="1">

        @foreach ($alumnos as $persona)
            <tr>
                <td>{{ $persona }}</td>
            </tr>
        @endforeach

    </table>

@endif

@endsection


@section('pie')
    Aquí iría el pie
@endsection
