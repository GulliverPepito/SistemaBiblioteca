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
		success: function(res){
			console.log(res);
			if(res==1){
				location.href = 'index.php';
			} else {
				setTimeout(function(){
					$('.login-box').append('<div class="alert alert-warning"><strong>Alerta!</strong> El Usuario y/o Contraseña estan mal.</div>');
				},1000);
				$('.botonlg').val('Iniciar Sesion');
			}
		}
	});
});