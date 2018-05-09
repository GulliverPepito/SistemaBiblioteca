$(document).on('submit','#formlg',function(event){
	event.preventDefault();
	$.ajax({
		url: 'php/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$("#iniB").html('Iniciando...');
		},
		success: function(res){
			console.log(res);
			if(res==1){
				location.href = 'index.php';
			} else if(res==2){
				location.href = 'alumno.php';
			} else {
				setTimeout(function(){
					$('#ver').html('<div class="alert alert-danger"><strong>Alerta!</strong> El Usuario y/o Contraseña estan mal.</div>');
					$("#iniB").html('Iniciar Sesion');
				},1000);
			}
		}
	});
});