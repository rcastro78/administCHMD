<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CHMD - Mantenimiento de catalogos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">CHMD</a>
		</div>	
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/gruposAdmin">Todos</a></li>
				<li class="active"><a href="gruposAdmin/create">Nuevo</a></li>
				<li><a href="dashboard">Menú Principal</a></li>
			</ul>	
		</div>	

	</div>
</nav>

<div class="panel panel-success">
	<div class="panel-heading">
		<h4>Modificar Grupo Administrativo</h4>
	</div>

	<div class="panel-body">
    <form method="post" action="{{action('GrupoAdminController@update',$grupoAdmin->id)}}">
        @method('POST')
        @csrf
				<p>
					<input name="nombre" id="nombre" placeholder="Nombre del grupo" value="{{$grupoAdmin->grupo}}" class="form-control" required>
                </p>
                
                <p>
					<input name="descripcion" id="descripcion" placeholder="Descripción del grupo" value="{{$grupoAdmin->descripcion}}" class="form-control">
				</p>
							
				<p>
					<input type="submit" class="btn btn-success btn-block" value="Guardar Grupo">
				</p>	



		</form>	



</body>
</html>	