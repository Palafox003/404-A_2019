@extends('plantillas.admin')

@section('titulo','Nuevo Producto')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br><br><br>
			<h2>Lista de Productos</h2>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Img</th>
					<th>Producto</th>
					<th>Costo</th>
					<th>Marca</th>
					<th>Cantidad</th>
					<th>Categoría</th>
					<th>Detalles</th>
				</tr>
@foreach($productos as $producto)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td class="producto-img"><img class="img-fluid img-producto" src="{{asset('/img/'.$producto->img)}}" alt="{{$producto->descripcion}}"></td>
					<td class="producto-nombre">{{$producto->nombre}}</td>
					<td class="producto-costo">{{$producto->costo}}</td>
					<td class="producto-marca">{{$producto->marca}}</td>
					<td class="producto-cantidad">{{$producto->cantidad}}</td>
					<td class="producto-categoria">{{$producto->categoria->nombre}}</td>
					<td>
						<button type="button" class="btn btn-info detalles-producto">Detalles</button>
					</td>
				</tr>
@endforeach

			</table>

<div class="modal" id="producto-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalles del producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col">
        			<h2 id="modal-titulo"></h2>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col">
        			<img id="modal-img" class="img-fluid" src="">
        			<p id="modal-descripcion"></p>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		</div>
	</div>

@endsection