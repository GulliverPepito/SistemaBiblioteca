$('#agregarLibro').hide();
$('#registrarLibro').click(function() {
    $('#agregarLibro').show();
});
$('#formLibro').submit(function(evt) {
    evt.preventDefault();
    var datos = $('#formLibro').serializeArray();
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
                mostrarDatos();
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
            $('#ubicacionEditar').append(response);
        }

    });
}

function carrera() {
    $.ajax({
        url: 'php/agregarLibro.php',
        type: 'POST',
        data: { tag: 'carrera' },
        success: function(response) {
            $('#carrera').append(response);
            $('#carreraEditar').append(response);
        }
    });
}

function tema() {
    $.ajax({
        url: 'php/agregarLibro.php',
        type: 'POST',
        data: { tag: 'temaGeneral' },
        success: function(response) {
            $('#temaGeneral').append(response);
            $('#temaGeneralEditar').append(response);
        }
    });
}

function mostrarDatos() {
    $.ajax({
        url: 'php/modificarLibro.php',
        type: 'POST',
        data: { tag: 'mostrarDatos' },
        success: function(response) {
            $("#datosEditarLibros").html(response);
        }
    });
}
ubicacion();
carrera();
tema();