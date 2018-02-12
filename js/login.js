$(document).on('submit','#formlg',function(event){
	event.preventDefault();
	$.ajax({
		url: 'php/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
		},
		success: function(respuesta){
			console.log(respuesta);
			if(!respuesta.error){
				if(respuesta.tipo==1) {
					location.href = './';
				} else if(respuesta.tipo==2) {
					location.href = 'Maestro/';
				} else if(respuesta.tipo==3) {
					location.href = 'Administrativo/';
				}
			} else {
				setTimeout(function(){
					$('.login-box').append('<div class="alert alert-warning"><strong>Alerta!</strong> El Usuario y/o Contraseña estan mal.</div>');
				},1000);
				$('.botonlg').val('Iniciar Sesion');
			}
		}
	});
});