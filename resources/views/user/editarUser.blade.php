@extends('layouts.layout')

    @section('content')
    <form action="">
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <form action=""></form>
                    <div class="container ">
                        <a href="/dashboard" style="margin-left: auto; display: block" class="btn-close"
                            aria-label="Close"></a>
                            <div class="row">
                                <div class="col">

                                        <label for="validationCustom01" class="form-label">Primer Nombre <b style="color: #ff0000">*</b></label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ Auth::user()->USE_PRIMER_NOMBRE }}">
                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                          <br>
                                          <label for="validationCustom01" class="form-label">Nombre De Usuario <b style="color: #ff0000">*</b></label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ Auth::user()->name }}">
                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                          <br>

                                          <label for="validationCustom04" class="form-label">Tipo de Identificaccion <b style="color: #ff0000">*</b></label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled value="{{ Auth::user()->USE_PRIMER_NOMBRE }}">{{ Auth::user()->USE_TIPO_DOCUMENTO}}</option>
                                            <option value="CC">CC - Cedula de Ciuadania</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid state.
                                          </div>
                                          <br>

                                          <label for="validationCustom04" class="form-label">Departamento <b style="color: #ff0000">*</b></label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled value="">{{ Auth::user()->USE_DEPARTAMENTO}}</option>
                                            <option value="Atlantico">Atlantico</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid state.
                                          </div>

                                </div>

                                <div class="col">

                                        <label for="validationCustom01" class="form-label">Segundo Nombre</label>
                                        <input type="text" class="form-control" id="validationCustom01" disabled value  ="{{ Auth::user()->USE_SEGUNDO_NOMBRE}}">
                                        <br>
                                        <label for="validationCustom01" class="form-label">Email <b style="color: #ff0000">*</b></label>
                                        <input type="text" class="form-control" id="validationCustom01" disabled value="{{ Auth::user()->email}}">
                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                        <br>
                                        <label for="validationCustom01" class="form-label">Numero de Identificaccion <b style="color: #ff0000">*</b></label>
                                        <input type="text" class="form-control" id="validationCustom01" disabled value="{{ Auth::user()->USE_NUMERO_IDENTIFICACCION}}">
                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                        <br>

                                        <label for="validationCustom04" class="form-label">Municipio <b style="color: #ff0000">*</b></label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled value="">{{ Auth::user()->USE_MUNICIPIO}}</option>
                                            <option value="Galapa">Galapa</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>

                                </div>

                                <div class="col">

                                        <label for="validationCustom01" class="form-label">Primer Apellido <b style="color: #ff0000">*</b></label>
                                        <input type="text" class="form-control" id="validationCustom01"  disabled value="{{ Auth::user()->USE_PRIMER_APELLIDO}}">
                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                        <br>
                                        <label for="validationCustom01" class="form-label">Contraseña <b style="color: #ff0000">*</b></label>
                                        <input type="password" class="form-control" id="validationCustom01" disabled value="{{ Auth::user()->password}}">

                                        <div class="invalid-feedback">
                                            campo obligatorio
                                          </div>
                                        <br>

                                        <label for="validationCustom01" class="form-label">Fecha de Nacimiento </label>
                                        <input type="date" class="form-control" id="validationCustom01" disabled value="{{ Auth::user()->USE_FECHA_NACIMIENTO}}">
                                        <br>

                                        <label for="validationCustom04" class="form-label">Tipo de zona</label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled >{{ Auth::user()->USE_TIPO_ZONA}}</option>
                                            <option value="Rural">Rural</option>
                                          </select>


                                </div>

                                <div class="col">

                                        <label for="validationCustom01" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" id="validationCustom01"  disabled value="{{ Auth::user()->USE_SEGUNDO_APELLIDO }}" name="validationCustom01}}">
                                        <br>

                                        <label for="validationCustom04" class="form-label">Genero <b style="color: #ff0000">*</b></label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled >{{ Auth::user()->USE_GENERO}}</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid state.
                                          </div>
                                        <br>

                                        <label for="validationCustom04" class="form-label">Estado Civil</b></label>
                                          <select class="form-select" id="validationCustom04" disabled>
                                            <option selected disabled >{{ Auth::user()->USE_ESTADO_CIVIL}}</option>
                                            <option value="Soltero">Soltero</option>
                                          </select>
                                          <br>

                                          <div class="text-center">
                                            <A class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</A>
                                          </div>


                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
