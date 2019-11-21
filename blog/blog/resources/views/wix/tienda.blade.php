@extends('plantillas.plantilla_1')

@section('titulo','Tienda')

@section('contenido')
<div class="container">
	<br><br><br>
	<div class="row">
		<div class="col">
				<div class="form-group">
					<label for="categorias">Categorías:</label>
					<div class="dropdown">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Categorías 
					  </a>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					  	<a class="dropdown-item" href="{{route('tienda')}}">TODAS</a>
@foreach($categorias as $categoria)
					    <a class="dropdown-item" href="{{route('selectCategoria',$categoria->id)}}">{{$categoria->nombre}}</a>
@endforeach					    
					  </div>
					</div>
			</div>
		</div>
		<div class="col">
			<h2 class="titulo"><p>TIENDA</p></h2>
		</div>
	</div>
	<div class="row justify-content-md-center">
@foreach($productos as $producto)
		<div class="col-lg-3">
			<a href="{{route('detallesProducto',['id_producto'=>$producto->id])}}">
				<div class="img-tienda">
					<img class="img-fluid" src="{{asset('img/'.$producto->img)}}">
					<div class="pre-img-tienda">
						<p class="txt-img-tienda">Vista rápida</p>
					</div>
				</div>
				<p class="precio">{{$producto->nombre}}<br>
					${{number_format($producto->costo,2)}} MXN
				</p>
			</a>
		</div>
@endforeach
	<div class="justify-content-md-center">
		<br><br>
		<div class="col">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item"><a class="page-link" href="{{$productos->previousPageUrl()}}">Previous</a></li>
@for($i=0;$i<$productos->lastPage();$i++)
			    <li class="page-item"><a class="page-link" href="{{$productos->url($i+1)}}">{{$i+1}}</a></li>
@endfor
			    <li class="page-item"><a class="page-link" href="{{$productos->nextPageUrl()}}">Next</a></li>
			  </ul>
			</nav>
		</div>
	</div>
</div>
</div>
@endsection