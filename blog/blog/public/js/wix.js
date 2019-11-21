$(document).ready(function(){

	$("#cantidad").change(function(){
		var stock=$("#stock").text();
		var cantidad=$("#cantidad").val();
		var dif=stock-cantidad;

		if(cantidad<0){
			$("#cantidad").addClass("is-invalid");
		}else{
			if(dif>=0){
				$("#cantidad").removeClass("is-invalid");
			}else{	
				$("#cantidad").addClass("is-invalid");
			}
		}
	});

	$("#materias").click(function(){
		$(this).fadeOut("slow")
		//$(this).append("<li>Modelado digital</li>");
	});

	$("#img-detalles").click(function(){
		$("#img-full").slideDown("slow");
	});

	$("#img-full").click(function(){
		$("#img-full").slideUp("slow");
	});

	$(".detalles-producto").click(function(){
		//var producto=$(this).parent().parent().find(".producto-nombre").text();
		//	$("#modal-titulo").text(producto);

		$(this).parent().parent().find("td").each(function(i){
			switch(i){
				case 1:
					$("#modal-img").attr("src",$(this).children().attr("src"));
					$("#modal-descripcion").text($(this).children().attr("alt"));
					break;
				case 2:
					$("#modal-titulo").text($(this).text());
					break;
				default:

					break;
			}
		});

		$("#producto-modal").modal("show");
	});
	
});