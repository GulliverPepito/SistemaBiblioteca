$(document).ready(function() {
    $('#buscarUsuarioPrestamoForm').submit(function(evt) {
        evt.preventDefault();
        $.ajax({
            url: 'php/nuevoPrestamo.php',
            type: 'POST',
            data: { numControl: $('#buscarUsuarioPrestamo').val(), tag: 'buscarUsuario' },
            dataType: 'json',
            success: function(response) {
                if (response == 0) {
                    alert('Numero de Control No registrado o Equivocado!!!');
                } else {
                    $('#buscarUsuarioPrestamo').val('');
                    $('#numeroControlPrestamo').val(response.numControl);
                    $('#alumnoPrestamo').val(response.alumno);
                    $('#carreraPrestamo').val(response.carrera);
                    $('#tipoPrestamo').val(response.tipo);
                    $('#idPrestatario').val(response.id);
                    $('#buscarLibrosPrestamo').attr('disabled', false);
                    $('#buscarLibrosPrestamo').focus();
                }
            }
        });
    });
    $('#buscarLibrosPrestamoForm').submit(function(evt) {
        evt.preventDefault();
        var num = 0;
        var a = true;
        $('#tbDetallePrestamo tr').each(function() {
            num++;
            var cod = $(this).find('td').eq(0).html();
            if (cod == $('#buscarLibrosPrestamo').val()) {
                alert('Libro ya ha sido agregado!!!');
                a = false;
            }
            if (num >= 3) {
                alert('Solo puede agregar 3 Libros por Alumno');
                a = false;
            }
        });
        if (a) {
            $.ajax({
                url: 'php/nuevoPrestamo.php',
                type: 'POST',
                data: { codigo: $('#buscarLibrosPrestamo').val(), tag: 'buscarLibro' },
                success: function(response) {
                    $('#tbDetallePrestamo').append(response);
                    $('#buscarLibrosPrestamo').val('');
                }
            });
        }
    });
    var datos = [];
    var num = 0;
    $('#btnGuardarPrestamo').click(function() {
        var id;
        var hoyFin = new Date();
        hoyFin.setDate(hoyFin.getDate() + 25);
        var dd = hoyFin.getDate();
        var mm = hoyFin.getMonth() + 1; //hoy es 0!
        var yyyy = hoyFin.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        hoyFin = yyyy + '-' + mm + '-' + dd;
        var datosPrestamo = {
            fechaInicio: $('#fechaPrestamo').val(),
            fechaFin: hoyFin,
            prestatario: $('#idPrestatario').val(),
            tag: 'insertarPrestamo'
        };
        $.ajax({
            url: 'php/nuevoPrestamo.php',
            type: 'POST',
            data: datosPrestamo,
            beforeSend: function() {
                $('#carga').show();
            },
            success: function(response) {
                if (response != 0) {
                    detalle(response);
                } else {
                    alert('Error no se pudo guardar el prestamo');
                    $('#carga').hide();
                }
            }
        });
    });

    function detalle(idPrestamo) {
        $('#tbDetallePrestamo tr').each(function() {
            datos[num] = {
                libro: $(this).find('td').eq(2).html(),
                prestamo: idPrestamo
            };
            num++;
        });
        var datosDetalle = {
            datos: datos,
            tag: 'insertarDetalle'
        }
        $.ajax({
            url: 'php/nuevoPrestamo.php',
            type: 'POST',
            data: datosDetalle,
            success: function(response) {
                if (response == 1) {
                    alert('Guardado Correctamente');
                    mostrarPrestamos();
                } else {
                    alert('Error no se pudo guardar el prestamo');
                }
                $('#carga').hide();
            }
        });
        $('#tbDetallePrestamo tr').remove();
        $('.prestamo').val('');
        num = 0;
    }
    $(document).on('click', '.eliminarDetalleLibro', function() {
        $(this).parents('tr').remove();
    });

    function getDia() {
        var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth() + 1; //hoy es 0!
        var yyyy = hoy.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        hoy = yyyy + '-' + mm + '-' + dd;
        $('#fechaPrestamo').val(hoy);
    }

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
    getDia();
});