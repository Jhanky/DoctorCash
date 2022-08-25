<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            background-color: #dfdfdf;
            --color-header-step: #78bc18;

            --color-border-input: #ddd;
        }

        /* Contenedor principal */
        .root {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            font-family: sans-serif;
            background-image: linear-gradient(var(--color-bg-1), var(--color-bg-2));
            overflow: hidden;
        }

        /* Formulario */
        .form-register {
            padding: 20px 15px;
            width: 100%;
            max-width: 400px;
        }

        /* Header del formulario */

        /* Progressbar */
        .progressbar {
            display: flex;
            list-style: none;
            margin-bottom: 15px;
            counter-reset: step;
        }

        .progressbar__option {
            width: 100%;
            text-align: center;
            font-size: .7rem;
            text-transform: uppercase;
            position: relative;
        }

        .progressbar__option:before {
            display: flex;
            content: counter(step);
            counter-increment: step;
            width: 20px;
            height: 20px;
            background-color: white;
            margin: 0 auto 5px;
            border-radius: 3px;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 2;
        }


        .progressbar__option:after {
            display: block;
            content: '';
            width: 100%;
            height: 2px;
            background-color: white;
            position: absolute;
            top: 10px;
            left: -50%;
            z-index: 1;
        }

        .progressbar__option:first-child:after {
            content: none;
        }

        .progressbar__option.active:before,
        .progressbar__option.active:after {
            background-color: var(--color-header-step);
        }

        /* Título del formulario */
        .form-register__title {
            font-size: 1.4rem;
            text-align: center;
            margin-bottom: 15px;
        }

        /* body del formulario */
        .form-register__body {
            display: flex;
            align-items: flex-start;
        }

        /* step */
        .step {
            background-color: white;
            box-shadow: 5px 5px 5px 2px var(--color-shadow);
            border-radius: 3px;
            min-width: 100%;
            opacity: 0;
            transition: all .2s linear;
        }

        .step.active {
            opacity: 1;
        }

        .step.to-left {
            margin-left: -100%;
        }

        .step.inactive {
            animation-name: scale;
            animation-duration: .2s;
            animation-direction: alternate;
            animation-iteration-count: 2;
        }

        @keyframes scale {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.1);
            }
        }

        /* header de step */
        .step__header {
            padding: 20px 15px;
            background-color: var(--color-header-step);
            border-radius: 3px 3px 0 0;
        }

        .step__title {
            font-size: 1.1rem;
            text-align: center;
            color: white;
        }

        /* body de step */
        .step__body {
            padding: 20px 15px 0;
        }

        /* step inputs */
        .step__input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid var(--color-border-input);
        }

        /* step footer */
        .step__footer {
            padding: 20px 15px;
            text-align: center;
        }

        /* step botones */
        .step__button {
            display: inline-block;
            padding: 10px;
            background-color: #78bc18;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }

        .button_cancelar {
            display: inline-block;
            padding: 3px;
            margin: 5px;
            background-color: #f90606;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }

        footer {
            position: absolute;
            width: 100%;
            height: 10px;
            color: white;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button
            {
        -webkit-appearance: none;
        margin: 0;
}

    </style>

<script>
    function soloNumeros(evt){
        if(window.event){
            keynum = evt.keyCode;
        }
        else{
            keynum = evt.which;
        }

        if((keynum > 47 && keynum < 58 || keynum==8 || keynum==13))
        {
            return true;
        }
        else{
            alert("ingresar solo numeros");
            return false;
        }
    }
</script>
<script src="https://kit.fontawesome.com/1be16bdfce.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <button type="button" class="button_cancelar" onclick="location.href='/dashboard'"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</button>

        <div class="root">

            <form action="{{ url('preguntas') }}" class="form-register" method="POST" id="formId">
                @csrf
                <div class="form-register__header">

                    <div hidden>
                        <ul class="progressbar">
                            <li class="progressbar__option active"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                            <li class="progressbar__option"></li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="form-register__body">

                    <div class="step active" id="step-1">
                        <div style="padding: 5%">
                            <h1 class="form-register__title">Realizar diagnostico</h1>
                        </div>
                        <div class="step__body">

                                <img src="{{ asset('imagenes/Finanzas.png') }}" alt="" class="img-fluid" width="340" height="250">


                        </div>
                        <div class="step__footer">
                            <button type="button" class="step__button step__button--next" data-to_step="2"
                                data-step="1">Comencemos!</button>
                        </div>
                    </div>

                    

                    @foreach ($ultimo['0'] as $id)
                    @endforeach
                    @foreach ($totalGastos['0'] as $tg)
                    @endforeach
                    @foreach ($totalEducacion['0'] as $te)
                    @endforeach
                    @foreach ($totalAhorro['0'] as $ta)
                    @endforeach
                    @foreach ($totalDivercion['0'] as $td)
                    @endforeach
                    @foreach ($totalInvercion['0'] as $tin)
                    @endforeach
                    @foreach ($totalDonacion['0'] as $tdo)
                    @endforeach
                    @foreach ($totalRemanente['0'] as $tr)
                    @endforeach
                    @foreach ($totalIngresos['0'] as $tig)
                    @endforeach
                    @php

                    @endphp
                    <input hidden type="text" name="test[CAL_INGRESO_V]" value="{{ $tig }}">
                    <input hidden type="text" name="test[CAL_EDUCACION_V]" value="{{ $te }}">
                    <input hidden type="text" name="test[CAL_AHORRO_V]" value="{{ $ta }}">
                    <input hidden type="text" name="test[CAL_DIVERCION_V]" value="{{ $td }}">
                    <input hidden type="text" name="test[CAL_INVERCION_V]" value="{{ $tin }}">
                    <input hidden type="text" name="test[CAL_DONACION_V]" value="{{ $tdo }}">
                    {{-- <input hidden type="text" name="test[CAL_REMANENTE_V]" value="{{$tr}}"> --}}
                    <input hidden type="text" name="test[CAL_GASTOS__V]" value="{{ $tg }}">
                    <input hidden type="text" name="test[CAL_ID]">
                    <input hidden type="text" name="test[CAL_USE_ID]" value="{{ Auth::user()->id }}">
                    @foreach ($preguntas as $item)
                        <div class="step" id="step-{{ $item->PRE_ID + 1 }}">
                            <div class="step__header">
                                <h2 class="step__title">
                                    <h2 class="step__title">{{ $item->PRE_DESCRICCION }}</h2>
                                </h2>
                            </div>
                            <div class="step__body">
                                <input hidden type="text" name="dato{{ $item->PRE_ID + 1 }}[CAL_ID]"
                                    value="{{ $id + 1 }}">
                                <input hidden type="text" name="dato{{ $item->PRE_ID + 1 }}[PRE_ID]"
                                    value="{{ $item->PRE_ID }}">
                                {{-- <label for="respuesta"> Categoria: {{ $item->CAT_ID}}</label> --}}
                                <input type="number" ondrop="return false;" onpaste="return false;" placeholder="Introducir repuesta" id="respuesta"
                                    class="step__input datoInput"name="dato{{ $item->PRE_ID + 1 }}[RES_RESPUESTA]"
                                    value="0" onkeypress="return soloNumeros(event);">
                            </div>
                            <div class="step__footer">
                                <button type="button" class="step__button step__button--back"
                                    data-to_step="{{ $item->PRE_ID }}"
                                    data-step="{{ $item->PRE_ID + 1 }}">Regresar</button>
                                <button type="button" class="step__button step__button--next"
                                    data-to_step="{{ $item->PRE_ID + 2 }}"
                                    data-step="{{ $item->PRE_ID + 1 }}">Siguiente</button>
                            </div>
                        </div>
                    @endforeach
                    <div class="step" id="step-23">
                        <div style="padding: 5%">
                            <h1 class="form-register__title">Listo</h1>
                        </div>
                        <div class="step__body">
                            <img src="{{ asset('imagenes/Final (1).png') }}" alt="" class="img-fluid" width="340" height="250">

                        </div>
                        <div class="step__footer">
                            <button type="button" class="step__button step__button--back" data-to_step="22"
                                data-step="23">Regresar</button>
                            <input type="submit" class="step__button" value="Registrar preguntas">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

   {{--  <footer>

                <img src="{{ asset('imagenes/Avatar de doctor.png') }}" alt="" class="img-fluid">

    </footer> --}}

    <script>
        let form = document.querySelector('.form-register');
        let progressOptions = document.querySelectorAll('.progressbar__option');

        form.addEventListener('click', function(e) {
            let element = e.target;
            let isButtonNext = element.classList.contains('step__button--next');
            let isButtonBack = element.classList.contains('step__button--back');



            if (isButtonNext || isButtonBack) {
                let currentStep = document.getElementById('step-' + element.dataset.step);
                let jumpStep = document.getElementById('step-' + element.dataset.to_step);
                currentStep.addEventListener('animationend', function callback() {
                    currentStep.classList.remove('active');
                    jumpStep.classList.add('active');
                    if (isButtonNext) {
                        currentStep.classList.add('to-left');
                        progressOptions[element.dataset.to_step - 1].classList.add('active');
                    } else {
                        jumpStep.classList.remove('to-left');
                        progressOptions[element.dataset.step - 1].classList.remove('active');
                    }
                    currentStep.removeEventListener('animationend', callback);
                });
                currentStep.classList.add('inactive');
                jumpStep.classList.remove('inactive');
            }
        });
    </script>
</body>

</html>
