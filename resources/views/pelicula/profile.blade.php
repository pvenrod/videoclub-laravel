@include('common.header')

<table>
    <tr>
        <td colspan="2">
            {{$pelicula->titulo}}
        </td>
    </tr>
    <tr>
        <td>
            <img src="{{ URL::asset($pelicula->cartel) }}">
        </td>
        <td>
            {{$pelicula->titulo}}<br>
            <strong>Género/s: </strong>{{$pelicula->generos}}<br>
            <strong>Reparto: </strong>{{$pelicula->reparto}}<br>
            <strong>Dirección: </strong>{{$pelicula->direccion}}<br>
            <strong>Año </strong>{{$pelicula->anyo}}<br>
            <strong>Puntuación </strong>{{$pelicula->puntuacion}}<br>
            <strong>Última modificación</strong>{{$pelicula->updated_at}}<br>
        </td>
    </tr>
</table>
