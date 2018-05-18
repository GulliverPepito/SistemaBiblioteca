$(document).ready(function() {
	mostrar();
	
});

$("#buscador").keyup(function() {
	mostrar();
});

function mostrar() {
	var data= "bus="+$("#buscador").val();	
	$.ajax({
		url: 'php/imprimir.php',
		type: 'POST',
		data: data
	})
	.done(function(res) {
		$("#Books").html(res);
	})
	.fail(function() {
		alert(res);
	})
}

$(document).on("click", ".ImprimirEt", function(){
	var id = $(this).attr('id_detalle');
	$("#btnImprimirEtiquetas").val(id);
	$("#ID_Libro").val(id);
	
});

$(document).on("click", "#btnImprimirEtiquetas", function(){
    var id = $(this).val();
    var codigo = $("#codigoPrincipal").val();
    var ejemplar = $("#ejemplar").val();
    $.ajax({
        url:"php/imprimir.php",
        type: "POST",
        data:({
            codigo: codigo,
            ejemplar: ejemplar,
            id: id
        }),
    })
    .done(function(msg){
    window.open('php/etiquetas.php?id=' + id + "&c=" + codigo + "&e=" + ejemplar,'_blank');
	window.location.reload(false);
    })
    .fail(function(){
        alert(msg);
    });
	
});

