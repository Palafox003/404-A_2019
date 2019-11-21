@extends('plantillas.admin')

@section('titulo','Categorías')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br>
			<h2>Categorías</h2>
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>Categoría</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
@foreach($categorias as $categoria)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$categoria->nombre}}</td>
					<td><a class="btn btn-primary" href="/admin/categorias/{{$categoria->id}}/edit" role="button">Editar</a></td>
					<td>
						<form method="post" action="/admin/categorias/{{$categoria->id}}">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Eliminar</button>		
						</form>
					</td>
				</tr>
@endforeach
			</table>
		</div>
	</div>
@endsection