@include('common.header')

<table id="perfilPelicula">
    <tr>
        <td colspan="2">
            <span class='ruta'><a href="{{route('pelicula.index')}}">Películas</a>/<span class="sitioActual">{{$pelicula->titulo}}</span></span>
        </td>
    </tr>
    <tr style="height: 20px;"></tr>
    <tr>
        <td colspan="2">
            <span class='titulo'>{{$pelicula->titulo}}</span>
        </td>
    </tr>
    <tr style="height: 30px;"></tr>
    <tr>
        <td style="width: 40%;">
            <img id='cartel' src="{{ URL::asset($pelicula->cartel) }}">
        </td>
        <td  style="width: 60%;">
            <span class='titulo2'>{{$pelicula->titulo}}</span><br>
            <strong>Género/s: </strong>{{$pelicula->generos}}<br>
            <strong>Reparto: </strong>{{$pelicula->reparto}}<br>
            <strong>Dirección: </strong>{{$pelicula->direccion}}<br>
            <strong>Año: </strong>{{$pelicula->anyo}}<br>
            <strong>Puntuación: </strong>{{$pelicula->puntuacion}}<img class="star" src="{{ URL::asset('img/star.png') }}"><br><br>
            <a class="editar" href="{{route('pelicula.edit', $pelicula->id)}}">Editar</a>
            &nbsp;&nbsp;
            <a class="borrar" href="{{route('pelicula.delete', $pelicula->id)}}">Borrar</a>
        </td>
    </tr>
    <tr style="height: 30px;"></tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <span class="ultimaModificacion"><strong>Última modificación: </strong>{{$pelicula->updated_at}}<br></span>
        </td>
    </tr>
</table>
