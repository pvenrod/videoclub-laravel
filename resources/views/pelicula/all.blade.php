@include('common.header')

<span class="titulo">Películas</span>
<div class="peliculas">
    @foreach ($peliculas as $pelicula)
        <div class="pelicula">
            <img src="{{ URL::asset($pelicula->cartel) }}">
            <table>
                <tr>
                    <td><a href="{{route('pelicula.show', $pelicula->id)}}">{{$pelicula->titulo}}</a></td>
                </tr>
                <tr>
                    <td>
                        {{$pelicula->anyo}} | {{$pelicula->puntuacion}}
                        <img src="img/star.png">
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