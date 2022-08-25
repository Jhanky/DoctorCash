<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="m-0 vh-100 row justify-content-center align-items-center" style="background-color: #dfdfdf;
background-size: cover">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card o-hidden border-0 shadow-lg my-5" >

                <div class="card-body" >
                    <div class="text-center" style=" padding-top:5px">
                        <img src="{{ asset('imagenes/Login.png') }}" alt=""  class="img-fluid">
                    </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center" >
                            <div class="col-md-8">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-8">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn" style="background-color: #78bc18;color: #fff">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>


                    </form>
                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center" >
                            <div class="col-md-8">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('USE_EMAIL') is-invalid @enderror" name="USE_EMAIL" value="{{ old('USE_EMAIL') }}" required autocomplete="USE_EMAIL" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-8">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('USE_PASSWORD') is-invalid @enderror" name="USE_PASSWORD" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn" style="background-color: #f96806;color: #fff">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>


                    </form> --}}
                </div>
            </div> <div class="text-center">@if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:black">
                    {{ __('Olvide la Contraseña') }}
                </a>
                @endif

                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-right" style="color:black">Registrarme</a>
                            @endif</div>

        </div>
    </div>
</div>
</body>
  </div>
</html>
