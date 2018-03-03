$(document).ready(function() {
	var ver=0;
	var usu=$("#NomUsu").val();
	$("#moCo").click(function() {
		$("#contra").toggle("slow");
	});

	$("#CamUsu").submit(function(e) {
		e.preventDefault();
		var confir= confirm("Estas seguro que quieres cambiar tu nombre de usuario");

        if(confir==true){
          var datos = "metodo=1&nombre="+$.trim($("#NomUsu").val());

          $.ajax({
              url: '../php/perfil.php',
              type: 'POST',
              data: datos,
              beforeSend: function(){
                  $("#carga").show(0);                    
              }
          })
          .done(function(res) {
              alert(res);
              usu=$("#NomUsu").val();
              $("#carga").hide(0);
              $("#BGUsu").attr('disabled', true);
          })
          .fail(function(res) {
              alert(res);
          });
        }else{
          alert("Has cancelado la operación");
        }
	});

	$("#NomUsu").keyup(function() {
		if(usu!=$.trim($(this).val())){
			$("#BGUsu").attr('disabled', false);
		}else{
			$("#BGUsu").attr('disabled', true);
		}
	});

	$("#CamCon").submit(function(e) {
		e.preventDefault();

		if($("#ConN").val()==$("#ConR").val()){
			var confir= confirm("Estas seguro que quieres cambiar tu Contraseña");

	        if(confir==true){
	          	var datos = "metodo=2&contraA="+$("#ConA").val()+"&contraN="+$("#ConN").val();

	          	$.ajax({
	              	url: '../php/perfil.php',
	              	type: 'POST',
	              	data: datos,
	              	beforeSend: function(){
	                  	$("#carga").show(0);                    
	              	}
	          	})
	          	.done(function(res) {
	              	$("#carga").hide(0);
	              	if(res!="123"){
	              		alert(res);
	              		$(".con").val("");
	              		$("#BMCo").attr('disabled', true);
	              		$(".Ncon").attr('class', 'con Ncon form-control');
	              		$("#ConA").attr('class', 'con form-control');
	              	}else{
	              		$(".Ncon").attr('class', 'con Ncon form-control');
	              		$("#ConA").attr('class', 'con form-control is-invalid');
	              	}
	          	})
	          	.fail(function(res) {
	              	alert(res);
	          	});
	        }else{
	          alert("Has cancelado la operación");
	        }
		}else{
			$(".Ncon").attr('class', 'con Ncon form-control is-invalid');
		}
	});

	$(".con").keyup(function() {
		$("#BMCo").attr('disabled', false);
	});
});