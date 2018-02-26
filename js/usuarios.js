$(document).ready(function() {
    $('#FoUsu').submit(function(e) {
        e.preventDefault();
        var datos = $('#FoUsu').serializeArray();
        console.log("datos", datos);

        $.ajax({
            url: 'php/agregarUsuario.php',
            type: 'POST',
            data: datos,
            beforeSend: function(){
                $("#carga").show(0);                    
            }
        })
        .done(function(res) {
            alert(res);
            $(".inpUsu").val("");
            $("#carga").hide(0);
        })
        .fail(function(res) {
            alert("No se pudo guardar el usuario");
            console.log(res);
            $("#carga").hide(0);
        });
    });  

    function mostrar() {
              
    }  
});
