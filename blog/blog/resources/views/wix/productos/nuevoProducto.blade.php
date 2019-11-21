@extends('plantillas.admin')

@section('titulo','Nuevo Producto')

@section('contenido')

<div class="row">
	<div class="col">
		<br><br><br><br><br>
		@if ($errors->any())
		    <div class="alert alert-warning alert-dismissible fade show" role="alert">
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<h2>Nuevo Producto</h2>
		<form method="post" enctype="multipart/form-data" action="/admin/productos">
			@csrf
		  <div class="form-group">
		    <label for="nombre">Producto</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
		  </div>

		  <div class="form-group">
		    <label for="costo">Costo</label>
		    <input type="text" class="form-control" id="costo" name="costo">
		  </div>

		  <div class="form-group">
		    <label for="descripcion">Descripción</label>
		    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="marca">Marca</label>
		    <input type="text" class="form-control" id="marca" name="marca">
		  </div>

		  <div class="form-group">
		    <label for="cantidad">Cantidad</label>
		    <input type="text" class="form-control" id="cantidad" name="cantidad">
		  </div>

		  <div class="form-group">
		    <label for="categoria_id">Categoría</label>
		    <select class="form-control" name="categoria_id" id="categoria_id">
		      <option value="0">Selecciona una categoría</option>
@foreach($categorias as $categoria)
		      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
@endforeach		      
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="img">Img. Producto</label>
		    <input type="file" class="form-control" id="img" name="img">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Guardar</button>

		</form>
	</div>
</div>

@endsection