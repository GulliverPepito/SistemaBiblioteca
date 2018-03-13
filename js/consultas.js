$(document).ready(function() {
	mostrar();
	function mostrar() {
		var data= "bus="+$("#BusCon").val();	
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