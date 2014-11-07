@extends('layout')
@section('title')
Usuario nuevo
@stop

@section('contenido')

    <div id="TablaDerMin">
        <p class="TitForm">
            <img class="margenImag" src="{{ asset('super/images/usuarioBN2.gif') }}" width="27" height="33"/>
            INFORMACIÓN USUARIO
        </p>

            {{ Form::open(array('url' => 'admin/save/user', 'name' => 'usuario-editar', 'id'=>'frm-usuario-editar')) }}
            <input type="hidden" name="id" value=""/>

            <h3>Información de Usuario</h3>
            <label>
                {{Form::email('email','',array('placeholder' => 'E-mail'))}}
                {{ $errors->first('email','<p class="error_message">:message</p>') }}

            </label>
            <label>
                {{Form::text('first_name','',array('placeholder' => 'Nombre'))}}
                {{ $errors->first('first_name','<p class="error_message">:message</p>') }}
            </label>
            <label>
                {{ Form::text('last_name','',array('placeholder'=>'Apellido')) }}
                {{ $errors->first('last_name','<p class="error_message">:message</p>') }}
            </label>
            <label>
                {{ Form::password('password',array('placeholder'=>'Contraseña')) }}
                {{ $errors->first('password','<p class="error_message">:message</p>') }}
            </label>
            <label>
            {{ Form::password('password_r',array('placeholder'=>'Contraseña')) }}
            </label>

           <!--             <ul>
                    <li for="">
                        <select name="rol" id="rol">
                            <option value="">Selecciona rol</option>


                        </select>
                    </li>
                </ul>
            -->

            <!--
    		<h3>Permisos</h3>
    		<h4>Tipo de Usuario</h4>
    		<select name="rol_id">
    			<option value="">-Seleccionar-</option>
    					</select>
    		<h4>Creación formularios</h4>
    		<label> <input type="radio" name="form_creation" value="1"  /> Dominio Público </label>
    		<label> <input type="radio" name="form_creation" value="2"  /> Cuentas Corporativas </label>
    		<h4>Servicio al cliente</h4>
    		<label> <input type="checkbox" name="client_service[]" value="1"  /> Chat </label>
    		<label> <input type="checkbox" name="client_service[]" value="2"  /> Call Center </label>
    		<label> <input type="checkbox" name="client_service[]" value="3"  /> E-Mail </label>
    		<label> <input type="checkbox" name="client_service[]" value="4"  /> Cobranza </label>
    		-->


    </div>

        <div id="TablaDerMin">

            <p class="TitForm">
                <img class="margenImag" src="{{ asset('super/images/permisos.gif') }}" width="27" height="33"/>
                PERMISOS
            </p>

            <p>
                <img class="margenImag" width="24" height="31" src="{{ asset('super/images/crearForm.gif') }}">
                CREACIÓN DE FORMULARIOS
            </p>
            <input type="hidden" name="id" value=""/>
            <ul>
                <li>

                    {{ Form::checkbox('dp','1',null,array('class' => 'wskCheckbox', 'id' => 'check1'))}}
                    {{ Form::label('check1', ' ', array('class' => 'wskLabel'))}}
                    Dominio Público
                </li>
                <li>
                    {{ Form::checkbox('cc','1',null,array('class' => 'wskCheckbox', 'id' => 'check2'))}}
                    {{ Form::label('check2', ' ', array('class' => 'wskLabel'))}}
                    Cuentas corporativas
                </li>
            </ul>
            <div class="col">
                <fieldset>
                    <ul>
                        <li>
                            <select name="cta_corp" id="">
                                <option value="corporativa">Cuenta corporativa</option>
                            </select>
                        </li>
                    </ul>
                </fieldset>
            </div>
            <div class="col">
                <fieldset>
                    <ul>
                        <li>
                            <select name="cta_reg" id="">
                                <option value="Resgistradas">Cuentas Resgistradas</option>
                            </select>
                        </li>
                    </ul>
                </fieldset>
            </div>


            <p class="TitForm">
                <img class="margenImag" width="24" height="31" src="/superabogado/admin/images/serviciosRB.gif">
                SERVICIO AL CLIENTE
            </p>

            <div class="col">
                <fieldset>
                    <ul>
                        <li>
                            {{ Form::checkbox('chat_cc','1',null,array('class' => 'wskCheckbox', 'id' => 'check3'))}}
                            {{ Form::label('check3', ' ', array('class' => 'wskLabel'))}}
                            CHAT
                        </li>
                        <li>
                            {{ Form::checkbox('email_c','1',null,array('class' => 'wskCheckbox', 'id' => 'check4'))}}
                            {{ Form::label('check4', ' ', array('class' => 'wskLabel'))}}
                            E-MAIL
                        </li>
                    </ul>
                </fieldset>
            </div>

            <div class="col">
                <fieldset>
                    <ul>
                        <li>
                            {{ Form::checkbox('call_c','1',null,array('class' => 'wskCheckbox', 'id' => 'check5'))}}
                            {{ Form::label('check5', ' ', array('class' => 'wskLabel'))}}
                            CALL CENTER
                        </li>
                        <li>

                            {{ Form::checkbox('cobranza_c','1',null,array('class' => 'wskCheckbox', 'id' => 'check6'))}}
                            {{ Form::label('check6', ' ', array('class' => 'wskLabel'))}}
                            COBRANZA
                        </li>
                    </ul>
                </fieldset>
            </div>
        </div>

    <div id="buton">
        {{ Form::submit('Guardar',array('class'=>'RegBot')) }}
    </div>


    {{Form::close()}}

    <script>

        $('document').ready(function () {

            $('#rol').val('');
            $('#frm-usuario-editar').submit(function (event) {


                var myfrm = this;
                var error = false;
                $('input[name="email"]').val($.trim($('input[name="email"]').val()));
                if($('input[name="email"]').val() == '') {
                    $().toastmessage('showErrorToast', 'Debe completar el campo email');
                    $('input[name="email"]').focus();
                    error = true;
                    return false;
                    }
                if($('input[name="email"]').val().indexOf('@', 0) == -1 || $('input[name="email"]').val().indexOf('.', 0) == -1) {
                          $().toastmessage('showErrorToast', 'Debe ingresar un email valido');
                          $('input[name="email"]').focus();
                          error = true;
                          return false;
                    }
                $('input[name="first_name"]').val($.trim($('input[name="first_name"]').val()));
                if($('input[name="first_name"]').val() == '') {
                       $().toastmessage('showErrorToast', 'Debe completar el campo nombre');
                       $('input[name="first_name"]').focus();
                       error = true;
                       return false;
                    }
                 $('input[name="last_name"]').val($.trim($('input[name="last_name"]').val()));
                  if($('input[name="last_name"]').val() == '') {
                    $().toastmessage('showErrorToast', 'Debe completar el campo Apellido');
                    $('input[name="last_name"]').focus();
                    error = true;
                    return false;
                  }
                if ($('input[name="password"]').val() == "") {
                    $().toastmessage('showErrorToast', 'Debe introducir una contraseña');
                    $('input[name="password"]').focus();
                    error = true;
                    return false;
                }
                if ($('input[name="password"]').val() !== $('input[name="password_r"]').val()) {
                    $().toastmessage('showErrorToast', 'Las Contraseñas no coinciden ');
                    $('input[name="password"]').focus();
                    error = true;
                    return false;
                }

                return !error;

           });
        });
    </script>

@stop


