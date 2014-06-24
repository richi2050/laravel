 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD laravel</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<style type="text/css">
	body{
		width: 450px;
		margin: 50px auto;
	}
	.badge{
		float: right;
	}
	</style>
</head>
<body>
	<h1>CRUD Laravel</h1>
	<nav class="navbar navbar-default" rol="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">.::DE::.</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/users">Todos</a></li>
					<li><a href="/users/create">Nuevo</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="panel panel-success">
		<div class="panel-heading">
			<h4>Informacion del usuarios</h4>
		</div>

		<div class="panel-body">
			@if(!empty($user))
			<p>
				Nombre: <strong>{{ $user->name }}</strong>
			</p>
			<p>
				twitter: <strong>{{ $user->twitter }}</strong>
			</p>
			@else
			<p>
				No esiste informacion para éste usuario
			</p>
			@endif

			<a href="/users" class="btn btn-default">Regresar</a>
		</div>
		</div>
		</body>
		</html>	