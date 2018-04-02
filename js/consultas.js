$(document).ready(function() {
	mostrar();

	$("#BusCon").keyup(function() {
		mostrar();
	});

	$("input[name=filtro]").click(function () {    
        mostrar();
    });

	function mostrar() {
		var data= "bus="+$("#BusCon").val()+"&status="+$('input:radio[name=filtro]:checked').val();	
		$.ajax({
			url: 'php/consultas.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			$("#verConsu").html(res);
		})
		.fail(function() {
			alert(res);
		})
	}
});