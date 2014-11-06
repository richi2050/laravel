@extends('layout')
@section('contenido')
<h2>INICIAR SESION</h2>
        {{ Form::open(array('url' => '/login')) }}

		<table>
			<tr>
				<td>
				    {{--{{ Form::label('username','Usuario') }}--}}
				    Usuario
				</td>
				<td>
				    {{ Form::text('username', Input::old('username'),array('placeholder' => 'Username')) }}
				</td>
			</tr>
			<tr>
				<td>
				    {{--{{ Form::label('password','Contraseña') }}--}}
				    Contraseña
				</td>
				<td> {{ Form::password('password',array('placeholder'=>'Contraseña')) }} </td>
			</tr>
			<tr>
				<td colspan="2"> <button class="RegBot" type="submit">Entrar</button> </td>
			</tr>
		</table>
	  {{ Form::close() }}



@stop