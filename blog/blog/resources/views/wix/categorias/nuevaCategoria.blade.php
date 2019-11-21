@extends('plantillas.admin')

@section('titulo','Nueva Categoría')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>Nueva Categoría</h2>

			<form method="post" action="/admin/categorias">
				@csrf
			  <div class="form-group">
			    <label for="categoria">Categoría</label>
			    <input type="text" class="form-control" id="categoria" name="nombre" placeholder="Nombre de la categoría">
			  </div>

			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection