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
			<h4>Lista de usuarios</h4>
		</div>

		<div class="panel-body">
			<form method='post' action="store">
				<p>
					<input type="text" name='name' placeholder="Nombre" class="form-control" required>
				</p>
				<p>
					<input type="text" name="twitter" placeholder="Twitter" class="form-control" required>
				</p>
				<p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
			</form>	
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message') }}</div>
		
	@endif	
</body>
</html>