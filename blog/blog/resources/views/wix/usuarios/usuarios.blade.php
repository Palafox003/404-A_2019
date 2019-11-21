@extends('plantillas.admin')

@section('titulo','Usuarios')

@section('contenido')
	<div class="row">
		<div class="col">
			<br><br><br><br><br>
			<h2>Lista de Usuarios</h2>
			<form method="post" action="/admin/usuarios/buscar">
				@csrf
			  <div class="form-row align-items-center">
			    <div class="col-auto">
			      <label class="sr-only" for="inlineFormInputGroup">Username</label>
			      <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text">Buscar</div>
			        </div>
			        <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Username">
			      </div>
			    </div>
			    <div class="col-auto">
			      <button type="submit" class="btn btn-primary mb-2">Buscar</button>
			    </div>
			  </div>

			</form>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>Rol</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
@foreach($usuarios as $usuario)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$usuario->nombre}}</td>
					<td>{{$usuario->correo}}</td>
					<td>{{$usuario->telefono}}</td>
					<td>{{$usuario->role->rol}}</td>
					<td><a class="btn btn-primary" href="">Editar</a></td>
					<td><a class="btn btn-danger" href="">Eliminar</a></td>
				</tr>
@endforeach
			</table>
		</div>
	</div>
@endsection