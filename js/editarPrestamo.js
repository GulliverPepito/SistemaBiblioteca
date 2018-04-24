$(document).ready(function() {
    function mostrarPrestamos() {
        $.ajax({
            url: 'php/editarPrestamo.php',
            type: 'POST',
            data: { tag: 'mostrarPrestamos' },
            success: function(response) {
                $('#tbPrestamos').html(response);
            }
        });
    }
    var id;
    $(document).on('click', '.editarPrestamo', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        $(".mostrar").hide();
        $("#nuevoPresta").show();
        $.ajax({
            url: 'php/editarPrestamo.php',
            type: 'POST',
            dataType: 'json',
            data: { tag: 'editarPrestamo', id: id },
            success: function(response) {
                $('#buscarUsuarioPrestamo').attr('disabled', true);
                $('#numeroControlPrestamo').val(response.numControl);
                $('#alumnoPrestamo').val(response.alumno);
                $('#carreraPrestamo').val(response.carrera);
                $('#tipoPrestamo').val(response.tipo);
                $('#buscarLibrosPrestamo').attr('disabled', false);
                $('#btnGuardarPrestamo').hide();
                $('#btnRegresarPrestamo').show();
                $('#btnActualizarPrestamo').show();
            }
        });
        $.ajax({
            url: 'php/editarPrestamo.php',
            type: 'POST',
            data: { tag: 'detallePrestamo', id: id },
            success: function(response) {
                $('#tbDetallePrestamo').html(response);
            }
        });
    });
    $('#btnRegresarPrestamo').click(function() {
        var conf = confirm('Esta seguro de Regresar el Prestamo, Una vez regrasado no se podra recuperar!');
        if (conf) {
            $.ajax({
                url: 'php/editarPrestamo.php',
                type: 'POST',
                data: { tag: 'regresarPrestamo', id: id },
                beforeSend: function() {
                    $('#carga').show();
                },
                success: function(response) {
                    if (response == 1) {
                        alert('Prestamo Devuelto Correctamente!');
                        $('#buscarUsuarioPrestamo').attr('disabled', false);
                        $('#numeroControlPrestamo').val('');
                        $('#alumnoPrestamo').val('');
                        $('#carreraPrestamo').val('');
                        $('#tipoPrestamo').val('');
                        $('#buscarLibrosPrestamo').attr('disabled', true);
                        $('#tbDetallePrestamo').html('');
                        $('#buscarUsuarioPrestamo').focus();
                        $('#btnGuardarPrestamo').show();
                        $('#btnRegresarPrestamo').hide();
                        $('#btnActualizarPrestamo').hide();
                        mostrarPrestamos();
                    } else {
                        alert('Error no fue posible devolver el prestamo');
                    }
                    $('#carga').hide(0);
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $(document).on('click', '.eliminarPrestamo', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var conf = confirm('Esta seguro de Eliminarlo, Una vez Eliminado No podra recuperar los datos');
        if (conf) {
            $.ajax({
                url: 'php/editarPrestamo.php',
                type: 'POST',
                data: { tag: 'eliminarPrestamo', id: id },
                beforeSend: function() {
                    $('#carga').show();
                },
                success: function(response) {
                    if (response == 1) {
                        alert('Eliminado Correctamente');
                        mostrarPrestamos();
                    } else {
                        alert('Error No fue posible eliminarlo');
                    }
                    $('#carga').hide(0);
                }

            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    mostrarPrestamos();
});