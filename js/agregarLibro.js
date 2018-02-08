$('#agregarLibro').hide();
$('#registrarLibro').click(function() {
    $('#agregarLibro').show();
});
$('#btnAgregarLibro').click(function() {
    var datos = $('#formLibro').serializeArray();
    $.ajax({
        url: 'php/agregarLibro.php',
        type: 'POST',
        data: datos,
        success: function(response) {
            if (response == 1) {
                alert('Agregado Correctamente');
                $('#idLibro').val('');
                $('#isbn').val('');
                $('#codigoBarras').val('');
                $('#titulo').val('');
                $('#autor').val('');
                $('#tituloOriginal').val('');
                $('#anioEdicion').val('');
                $('#lugarEdicion').val('');
                $('#editorial').val('');
                $('#paginas').val('');
                $('#ubicacion').val('');
                $('#volumen').val('');
                $('#numSerie').val('');
                $('#carrera').val('');
                $('#url').val('');
                $('#temaGeneral').val('');
                $('#temaEspecifico').val('');

            } else {
                alert('Error No se pudo Agregar');
            }
        }
    });
});