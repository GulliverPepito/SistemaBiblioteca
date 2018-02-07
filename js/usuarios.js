$('#FoUsu').submit(function(evt) {
    evt.preventDefault();
    var datos = $('#FoUsu').serealizeArray();
    $.ajax({
        url: 'php/agregarUsuario.php',
        type: 'POST',
        data: datos,
        succes: function(response) {
            if (response == 1) {
                $('#UsuNombre').val('');
                $('#UsuApPat').val('');
                $('#UsuTipo').val('');
                $('#UsuApMat').val('');
                $('#UsuNoC').val('');
                $('#UsuApMat').val('');
                $('#UsuCa').val('');
            }
        }
    });
});