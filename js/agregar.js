$(document).ready(function() {
	areas();
	carreras();
	temas();
	ubicacion();
	selectAreas();

	$("#btnGuardarAreas").click(function() {
		var data="metodo=5&nombre="+$("#area").val();
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			$("#area").val("");
			areas();
			selectAreas();
		})
		.fail(function() {
			console.log("Error");
		});
	});

	$("#agregarCarrera").click(function() {
		var data="metodo=6&nombre="+$("#Carrera").val()+"&codigo="+$("#codigo").val();
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			$("#Carrera").val("");
			$("#codigo").val("");
			carreras();
		})
		.fail(function() {
			console.log("Error");
		});
	});

	$("#agregarTema").click(function() {
		var data="metodo=7&nombre="+$("#tema").val();
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			$("#tema").val("");
			temas();
		})
		.fail(function() {
			console.log("Error");
		});
	});

	$("#agregarUbicacion").click(function() {
		var data="metodo=9&id="+$("#area1").val()+"&fila="+$("#Ubicacion").val();
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			$("#area1").val("");
			$("#Ubicacion").val("");
			ubicacion();
		})
		.fail(function() {
			console.log("Error");
		});
	});

	function areas() {
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: "metodo=1"
		})
		.done(function(res) {
			$("#tablaAreas").html(res);
		})
		.fail(function() {
			console.log("Error");
		});
	}

	function carreras() {
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: "metodo=2"
		})
		.done(function(res) {
			$("#tablaCarreras").html(res);
		})
		.fail(function() {
			console.log("Error");
		});
	}

	function temas() {
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: "metodo=3"
		})
		.done(function(res) {
			$("#tablaTemas").html(res);
		})
		.fail(function() {
			console.log("Error");
		});
	}

	function ubicacion() {
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: "metodo=4"
		})
		.done(function(res) {
			$("#tablaUbicacion").html(res);
		})
		.fail(function() {
			console.log("Error");
		});
	}

	function selectAreas() {
		$.ajax({
			url: 'php/agregar.php',
			type: 'POST',
			data: "metodo=8"
		})
		.done(function(res) {
			$("#area1").html(res);
		})
		.fail(function() {
			console.log("Error");
		});
	}
});