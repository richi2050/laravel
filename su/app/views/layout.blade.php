<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('super/css/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ asset('super/css/administrador.css') }}" />
	<link rel="stylesheet" href="{{ asset('super/css/sytle.css') }}"  />
	<script src="{{ asset('super/js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('super/js/jquery-ui.js') }}"></script>
</head>
<body>
<header>
<ul id="usuario">
	<li class="sb"><a href="#"><img src="{{ asset('super/images/LogoSuperabogado.png') }}" alt="Inicio Administrador" height="18" width="346" border="0"></a></li>
	<li><a href="#"><img src="{{ asset('super/images/usuariosTop.gif') }}" alt="Perfil" height="45" width="37" border="0"></a></li>
	<li>{{ empty(Auth::user()->first_name)? '' : Auth::user()->first_name;  }} </li>
</ul>
<ul id="herramientas">
	<li><a href="/logout"><img src="{{ asset('super/images/configuracion.gif') }}" alt="Configuración" height="46" width="43" border="0"></a></li>
</ul>
</header>
@if(!empty(Auth::user()->first_name))
  <nav><ul>
   	<li>
  		<a href="/superabogado/admin/usuarios">
  			<img src="{{ asset('super/images/usuariosI.gif') }}" width="41" height="43" /> <br />
  			USUARIOS
  		</a>
      </li>
      <li>
  		<a href="#">
  			<img src="{{ asset('super/images/serviciosI.gif') }}" width="29" height="41" /> <br />
  			SERVICIO AL CLIENTE
  		</a>
  	</li>
      <li>
          <a href="/superabogado/admin/formularios">
              <img src="{{ asset('super/images/formulariosI.gif') }}" width="28" height="38" /> <br />
              FORMULARIOS
          </a>
      </li>
      <li>
  		<a href="/superabogado/admin/documentos">
  			<img src="{{ asset('super/images/formulariosI.gif') }}" width="28" height="38" /> <br />
  			DOCUMENTOS
  		</a>
      </li>
      <li>
  		<a href="/superabogado/admin/contenido">
  			<img src="{{ asset('super/images/contenidosI.gif') }}" width="34" height="35" /> <br />
  			CONTENIDO
  		</a>
      </li>
      <li>
  		<a href="/superabogado/admin/cuentas-corporativas">
  			<img src="{{ asset('super/images/cuentasI.gif') }}" width="32" height="33" /> <br />
  			CUENTAS CORP
  		</a>
      </li>
      <li>
  		<a href="#">
  			<img src="{{ asset('super/images/ingresosI.gif') }}" width="24" height="34" /> <br />
  			INGRESOS
  		</a>
      </li>
   </ul></nav>
@else
@endif
<main>







	@yield('contenido')
</main>
</body>
</html>