$('#FoUsu').submit(function(evt) {
    evt.preventDefault();
    var datos = $('#FoUsu').serializeArray();
    $.ajax({
        url: 'php/agregarUsuario.php',
        type: 'POST',
        data: datos,
        success: function(response) {
            if (response == 1) {
                $('#UsuNombre').val('');
                $('#UsuApPat').val('');
                $('#UsuTipo').val('');
                $('#UsuApMat').val('');
                $('#UsuNoC').val('');
                $('#UsuApMat').val('');
                $('#UsuCa').val('');
                alert("Agregado Correctamente");
            } else {
                alert('No se ha podido Agregar');
            }
        }
    });
});