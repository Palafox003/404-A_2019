@extends('plantillas.admin')

@section('titulo','Nuevo Usuario')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br><br><br>
		<h2>Nuevo Usuario</h2>
		<form method="post" action="/admin/usuarios">
			@csrf
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del usuario">
		  </div>

		  <div class="form-group">
		    <label for="correo">Correo</label>
		    <input type="email" class="form-control" id="correo" name="correo">
		  </div>

		  <div class="form-group">
		    <label for="telefono">Telefono</label>
		    <input type="text" class="form-control" id="telefono" name="telefono">
		  </div>

		  <div class="form-group">
		    <label for="password">Contraseña</label>
		    <input type="password" class="form-control" id="password" name="password">
		  </div>

		  <div class="form-group">
		    <label for="role_id">Rol</label>
		    <select class="form-control" name="role_id" id="role_id">
		      <option value="0">Selecciona un rol</option>
@foreach($roles as $rol)
		      <option value="{{$rol->id}}">{{$rol->rol}}</option>
@endforeach		      
		    </select>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Guardar</button>

		</form>
	</div>
</div>

@endsection