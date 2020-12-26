@include('common.header')

<span class="titulo">Películas</span>
<div class="peliculas">
    @foreach ($peliculas as $pelicula)
        <div class="pelicula">
            <img class="cartel" src="{{ URL::asset($pelicula->cartel) }}">
            <table>
                <tr>
                    <td><a href="{{route('pelicula.show', $pelicula->id)}}">{{$pelicula->titulo}}</a></td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        {{$pelicula->anyo}} | {{$pelicula->puntuacion}}
                        <img class="star" src="{{ URL::asset('img/star.png') }}">
                    </td>
                </tr>
                <tr style="height: 10px"></tr>
                <tr>
                    <td style="text-align: center">
                        <a class="editar" href="{{route('pelicula.edit', $pelicula->id)}}">Editar</a>
                        &nbsp;&nbsp;
                        <a class="borrar" href="{{route('pelicula.delete', $pelicula->id)}}">Borrar</a>
                    </td>
                </tr>
            </table>
        </div>
        <!--<tr>
            <td>{{$pelicula->cartel}}</td>
            <td>{{$pelicula->titulo}}</td>
            <td>{{$pelicula->anyo}}</td>
            <td>{{$pelicula->puntuacion}}</td>
        <br>-->
    @endforeach
</div>