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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1be16bdfce.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-primary">
    <div class="col-12">
        <a href="/"class="btn" style="margin: 3px; padding:3px; background-color: #f90606; color: #fff"><i
            class="fa-solid fa-angle-left"></i> Volver</a>
    </div>

    <div class="container">
        <form method="POST" action="{{ url('registro') }}">
            @csrf
            <div class="row">
                <div class="col">

                        <label for="validationCustom01" class="form-label">Primer Nombre <b style="color: #ff0000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="USE_PRIMER_NOMBRE">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                          <br>
                          <label for="validationCustom01" class="form-label">Nombre De Usuario <b style="color: #ff0000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="name">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                          <br>

                          <label for="validationCustom04" class="form-label">Tipo de Identificaccion <b style="color: #ff0000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_TIPO_DOCUMENTO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="CC">CC - Cedula de Ciuadania</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                          <br>

                          <label for="validationCustom04" class="form-label">Departamento <b style="color: #ff0000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_DEPARTAMENTO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Atlantico">Atlantico</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>

                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Segundo Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" name="USE_SEGUNDO_NOMBRE">
                        <br>
                        <label for="validationCustom01" class="form-label">Email <b style="color: #ff0000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="email">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                        <br>
                        <label for="validationCustom01" class="form-label">Numero de Identificaccion <b style="color: #ff0000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="USE_NUMERO_IDENTIFICACCION">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                        <br>

                        <label for="validationCustom04" class="form-label">Municipio <b style="color: #ff0000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_MUNICIPIO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Galapa">Galapa</option>
                          </select>
                          <div class="invalid-feedback">
                            campo obligatorio
                          </div>

                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Primer Apellido <b style="color: #ff0000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01"  required name="USE_PRIMER_APELLIDO">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                        <br>
                        <label for="validationCustom01" class="form-label">Contraseña <b style="color: #ff0000">*</b></label>
                        <input type="password" class="form-control" id="validationCustom01" required name="password">

                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                        <br>

                        <label for="validationCustom01" class="form-label">Fecha de Nacimiento </label>
                        <input type="date" class="form-control" id="validationCustom01" name="USE_FECHA_NACIMIENTO">
                        <br>

                        <label for="validationCustom04" class="form-label">Tipo de zona</label>
                          <select class="form-select" id="validationCustom04" name="USE_TIPO_ZONA">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Rural">Rural</option>
                          </select>


                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="USE_SEGUNDO_APELLIDO">
                        <br>

                        <label for="validationCustom04" class="form-label">Genero <b style="color: #ff0000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_GENERO">
                            <option selected disabled value="">Seleccionar Genero</option>
                            <option value="Masculino">Masculino</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        <br>

                        <label for="validationCustom04" class="form-label">Estado Civil</b></label>
                          <select class="form-select" id="validationCustom04" name="USE_ESTADO_CIVIL">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Soltero">Soltero</option>
                          </select>

                </div>
            </div>
            <br>
            <div class="text-center">
                <input type="submit" class="btn" value="Registrar y continuar" style="background-color: #78bc18; color: #fff">
            </div>

        </form>
    </div>
</body>

</html>
