@extends('plantillas.plantilla_1')

@section('titulo','Index')

@section('contenido')	
		<div class="row">
			<div class="col">
				<div id="img-fondo">
					<div class="jumbotron">
					  <h1 class="display-4 txt-jumbo">OTOÑO & INVIERNO</h1>
					  <center>
					  <a class="btn btn-primary btn-lg" href="#" role="button">Comprar</a>
					  </center>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="txt-centrado">ENVÍOS GRATIS A TODO EL MUNDO</p>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<img class="img-fluid cat-img" src="img/dama.jpg">
				</div>
				<p class="txt-img">Damas</p>
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<img class="img-fluid cat-img" src="img/infantil.jpg">
				</div>
				<p class="txt-img">Infantil</p>
			</div>
			<div class="col-lg-2 col-sm-8">
				<div class="cont-img">
					<img class="img-fluid cat-img" src="img/caballero.png">
				</div>
				<p class="txt-img">Caballeros</p>
			</div>
		</div>
@endsection		