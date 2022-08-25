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
            --color-header-step: #f96806;

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
            background-color: #f96806;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }

        .button_cancelar {
            display: inline-block;
            padding: 3px;
            margin: 5px;
            background-color: #f96806;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <button class="button_cancelar"></i>Cancelar</button>

        <div class="root">

            <form action="" class="form-register">
                <div class="form-register__header">
                    <h1 class="form-register__title">Responde las preguntas</h1>
                   <div hidden>
                    <ul class="progressbar">
                        <li class="progressbar__option active"></li>
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
                        <div class="step__header">
                            <h2 class="step__title">Pregunta</h2>
                        </div>
                        <div class="step__body">
                            <input type="text" placeholder="Introducir repuesta" class="step__input">
                        </div>
                        <div class="step__footer">
                            <button type="button" class="step__button step__button--next" data-to_step="2"
                                data-step="1">Siguiente</button>
                        </div>
                    </div>

                    @foreach ($preguntas as $item)
                        <div class="step" id="step-{{ $item->PRE_ID + 1 }}">
                            <div class="step__header">
                                <h2 class="step__title">
                                    <h2 class="step__title">{{ $item->PRE_DESCRICCION }}</h2>
                                </h2>
                            </div>
                            <div class="step__body">
                                <input type="text" placeholder="Introducir repuesta" class="step__input">
                            </div>
                            <div class="step__footer">
                                <button type="button" class="step__button step__button--back"
                                    data-to_step="{{ $item->PRE_ID }}"
                                    data-step="{{ $item->PRE_ID + 1 }}">Regresar</button>
                                <button type="button" class="step__button step__button--next"
                                    data-to_step="{{ $item->PRE_ID + 2 }}"
                                    data-step="{{ $item->PRE_ID + 1 }}">Siguiente</button>

                                <button type="submit" class="step__button">Registrar preguntas</button>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
        </div>
        </form>
    </div>
    </div>


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
