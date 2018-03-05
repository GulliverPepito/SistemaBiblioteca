$('#agregarLibro').hide();
$('#registrarLibro').click(function() {
    $('#agregarLibro').show();
});
$('#btnAgregarLibro').click(function() {
    var form = $('#formLibro').serializeArray();
    var tag = { tag: 'agregar' };
    var datos = form.concat(tag);
    $.ajax({
        url: 'php/agregarLibro.php',
        type: 'POST',
        data: datos,
        beforeSend: function() {
            $("#carga").show(0);
        },
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
                $('#carga').hide(0);

            } else {
                alert('Error No se pudo Agregar');
                $('#carga').hide(0);
            }
        }
    });
});

function ubicacion() {
    $.ajax({
        url: 'php/agregarLibro.php',
        type: 'POST',
        data: { tag: 'ubicacion' },
        success: function(response) {
            $('#ubicacion').append(response);
        }

    });
}
ubicacion();