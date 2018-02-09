$(document).ready(function() {
	CargaLibros();	
});


function CargaLibros(){
	$.ajax({
		type:"POST",
		url:"php/modificarLibros.php",
		data:({
			funcion : "CargaLibros",
			busqueda : ""	
		}),
		dataType: "html",
		success: function(msg){
			$("#datos").html(msg);
			//var e = prompt("", msg);
		}
	});
};


$(document).on("click", ".btnEliminarLibro",function(){
	var confir = confirm("El libro será eliminado");
	if (confir==true){
		var ID = $(this).attr("idregistro");
		//alert("hola");
		$.ajax({
			type:"POST",
			url:"php/modificarLibros.php",
			data:({
				funcion : "EliminarLibro",
				ID : ID
			}),
			dataType: "html",			
			success: function(msg){
			alert(msg);
			window.location.reload(false);
			}
		});	
	}else{
		window.location.reload(false);
	}	
});

$(document).on("click", ".btnEditaLibro",function(){	
	var ID = $(this).attr("idregistro");
	//alert(ID);
	$.ajax({
		type:"POST",
		url:"php/modificarLibros.php",
		data:({
			funcion : "CargaDatos",
			ID : ID
		}),
		dataType: "html",
		success: function(msg){
			//$("#DesplegarDatos").html(msg);
			//$("#DesplegarDatos").slideToggle();
			//var e = prompt("", msg);
		}
	});		
});


$(document).on("click", "#cancelarEdicion",function(){
	 //$("#DesplegarDatos").slideToggle();
});

$(document).on("click", "#EditarLibro", function(){
	var ID = $(this).attr("idregistro");
	//alert("hola");
	$.ajax({
		type:"POST",
		url:"php/modificarLibros.php",
		data:({
			funcion : "EditarLibro",
            ISBN = $('#isbn').val(),
            CodigoBarras = $('#codigoBarras').val(),
            $('#titulo').val('');
            $('#autor').val('');
            $('#tituloOriginal').val('');
            $('#anioEdicion').val('');
            $('#lugarEdicion').val('');
            $('#editorial').val('');
            $('#paginas').val('');
            $('#ubicacion').val('');
            $('#volumen').val('');
            $('#numSerie').val('');
            $('#carrera').val('');
            $('#url').val('');
            $('#temaGeneral').val('');
            $('#temaEspecifico').val('');
			ID : ID
		}),
		dataType: "html",
		beforeSend: function(){
			$("#carga").show(0);
		},
		success: function(msg){
			alert(msg);
			$("#carga").hide(0);
			$("#DesplegarDatos").slideToggle();
			window.location.reload(false);
			//var w = prompt(" ",msg);
		}
	});	
});

$(document).on("keyup", "#BuscaLibro", function(){
	var busqueda = $(this).val();
	$.ajax({
		type:"POST",
		url:"php/modificarLibros.php",
		data:({
			funcion : "CargaLibros",
			busqueda : busqueda
		}),
		dataType: "html",
		success: function(msg){
			alert(msg);
		}
	});	
});