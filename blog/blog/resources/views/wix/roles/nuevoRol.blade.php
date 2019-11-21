@extends('plantillas.admin')

@section('titulo','Nuevo Rol')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>Nuevo Rol</h2>

			<form method="post" action="/roles">
				@csrf
			  <div class="form-group">
			    <label for="rol">Rol</label>
			    <input type="text" class="form-control" id="rol" name="rol" placeholder="Nombre del Rol">
			  </div>

			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection