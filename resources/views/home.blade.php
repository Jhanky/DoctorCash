<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style></style>

</head>

<body style="background-color: #dfdfdf;
background-size: cover">
    @extends('layouts.layout')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="text-center">

                                <div class="embed-responsive embed-responsive-16by9">
                                    <video id="my_video_1" class="video-js vjs-default-skin" width="768px" height="432px"
                                    controls preload="none"
                                    poster='https://www.todofondos.net/wp-content/uploads/volcado-de-papel-tapiz-4k-minimalista-geometrico-listo-para-la-entrega-de-mi-768x432.jpg'
                                    data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                    <source src="{{ asset('videos/contacta.mp4') }}" type='video/mp4' />
                                  </div>

                               {{--  <video id="my_video_1" class="video-js vjs-default-skin" width="768px" height="432px"
                                    controls preload="none"
                                    poster='https://www.todofondos.net/wp-content/uploads/volcado-de-papel-tapiz-4k-minimalista-geometrico-listo-para-la-entrega-de-mi-768x432.jpg'
                                    data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                                    <source src="{{ asset('videos/contacta.mp4') }}" type='video/mp4' />
                                </video> --}}
                                <br>
                                <a href="/preguntas/responder" class="btn" style="background-color: #78bc18; color: #fff;"><b>Realizar Diagnostico</b></a>
                                <br>
                                <a href="/dashboard" style="color: black">Omitir</i></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
        $(function() {
            var $refreshButton = $('#refresh');
            var $results = $('#css_result');

            function refresh() {
                var css = $('style.cp-pen-styles').text();
                $results.html(css);
            }

            refresh();
            $refreshButton.click(refresh);

            // Select all the contents when clicked
            $results.click(function() {
                $(this).select();
            });
        });
    </script>
</body>


</html>
