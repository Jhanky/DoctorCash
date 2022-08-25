<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #graficos {
            display: inline-block;
            margin: .5em auto;
            padding: 0 .5em .5em;
            font: 900 2em/1.2 sans-serif;
            float: left;
        }

        #graficos .arco {
            display: block;
            font: 900 .8em/6em serif;
            text-align: center;
            margin: .2em auto;
            width: 8em;
            height: 4em;
            background-color: gainsboro;
            padding: 0;
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 100% 100%, 100% 200%;
        }
    </style>
</head>

<body>
    @extends('layouts.layout')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-4">
                                    <div id="graficos" class="text-center">



                                        <h2>Nivel</h2>
                                        <figure class="arco">
                                            0 %
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h1>Mensaje dependiendo del nivel</h1>
                                    <div class="row">
                                        <div class="col-sm">
                                            <table>
                                                <tr>
                                                    <td><b>Gasto: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_gastos['0'] as $p_gastos)
                                                            @if ($p_gastos > 100)
                                                                <span style="color: red"> -{{ round($p_gastos) }}%</span>
                                                            @else
                                                                {{ round($p_gastos) }}%
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Educación: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_educacion['0'] as $p_educacion)
                                                        @if ($p_educacion > 100)
                                                        <span style="color: red"> -{{ round($p_educacion) }}%</span>
                                                    @else
                                                        {{ round($p_educacion) }}%
                                                    @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Remanente: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_remanente['0'] as $p_remanente)
                                                        @if ($p_remanente > 100)
                                                        <span style="color: red"> -{{ round($p_remanente) }}%</span>
                                                    @else
                                                        {{ round($p_remanente) }}%
                                                    @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-sm">
                                            <table>
                                                <tr>
                                                    <td><b>Ahorro: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_ahorro['0'] as $p_ahorro)
                                                        @if ($p_ahorro > 100)
                                                        <span style="color: red"> -{{ round($p_ahorro) }}%</span>
                                                    @else
                                                        {{ round($p_ahorro) }}%
                                                    @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Diversión: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_divercion['0'] as $p_divercion)
                                                            @if ($p_divercion > 100)
                                                                <span style="color: red"> -{{ round($p_divercion) }}%</span>
                                                            @else
                                                                {{ round($p_divercion) }}%
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-sm">
                                            <table>
                                                <tr>
                                                    <td><b>Inversión: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_invercion['0'] as $p_invercion)
                                                            @if ($p_invercion > 100)
                                                                <span style="color: red"> -{{ round($p_invercion) }}%</span>
                                                            @else
                                                                {{ round($p_invercion) }}%
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Donación: </b></td>
                                                    <td>
                                                        @foreach ($porcentaje_donacion['0'] as $p_donacion)
                                                        @if ($p_donacion > 100)
                                                        <span style="color: red"> -{{ round($p_donacion) }}%</span>
                                                    @else
                                                        {{ round($p_donacion) }}%
                                                    @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-3">
                                    <select style="float: left" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option selected @disabled(false)>Categoria</option>
                                        <option value="1">Gastos</option>
                                        <option value="2">Educacion</option>
                                        <option value="3">Invercion</option>
                                    </select>
                                </div>
                            </div>
                            <br>



                            {{-- <div class="row">

                                <div class="col-4">
                                    <div class="text-center">
                                        <video id="my_video_1" class="video-js vjs-default-skin" width="350px"
                                            height="216px" controls preload="none"
                                            poster='https://www.todofondos.net/wp-content/uploads/volcado-de-papel-tapiz-4k-minimalista-geometrico-listo-para-la-entrega-de-mi.jpg'
                                            data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                            <source src="{{ asset('videos/contacta.mp4') }}" type='video/mp4' />
                                        </video>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <video id="my_video_1" class="video-js vjs-default-skin" width="350px"
                                            height="216px" controls preload="none"
                                            poster='https://www.todofondos.net/wp-content/uploads/volcado-de-papel-tapiz-4k-minimalista-geometrico-listo-para-la-entrega-de-mi.jpg'
                                            data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                            <source src="{{ asset('videos/contacta.mp4') }}" type='video/mp4' />
                                        </video>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <video id="my_video_1" class="video-js vjs-default-skin" width="350px"
                                            height="216px" controls preload="none"
                                            poster='https://www.todofondos.net/wp-content/uploads/volcado-de-papel-tapiz-4k-minimalista-geometrico-listo-para-la-entrega-de-mi.jpg'
                                            data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                            <source src="{{ url('videos/contacta.mp4') }}" type='video/mp4' />
                                        </video>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    @endsection
    <script></script>

    <script>
        function ajusta() {
            var horizontales = document.querySelectorAll("#graficos .horizontal");
            var arcos = document.querySelectorAll("#graficos .arco");
            elem = 0;
            while (elem < arcos.length) {
                arcos[elem].style.backgroundImage =
                    "radial-gradient(circle at bottom, white 45%, transparent 47%, transparent 67%, white 70%), linear-gradient(" +
                    (parseInt(arcos[elem].innerHTML) / 100) * 180 +
                    "deg, #f96806 50%, transparent 50%)";
                elem++;
            };

        }
        onload = ajusta;
    </script>
</body>

</html>
