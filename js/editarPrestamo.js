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
                console.log(response.tipo);
                if(response.tipo=='Admin'){
                    $('#btnRegresarPrestamo').show();
                    $('#btnActualizarPrestamo').show();
                }
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
                        mostrar();
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
                        mostrar();
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
    var alumno;
    $(document).on('click', '.pagarPrestamo', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var fechaFin = $(this).parents('tr').find('td').eq(2).html();
        var fin = new Date(fechaFin).getTime();
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
        var fechaInicio = new Date(hoy).getTime();
        var diff = fechaInicio - fin;
        var dias = diff / (1000 * 60 * 60 * 24);
        $.ajax({
            url: 'php/editarPrestamo.php',
            type: 'POST',
            data: { tag: 'librosDetalle', id: id },
            success: function(response) {
                var d = parseFloat(response) * 5;
                var deuda = d * dias;
                $('.deuda').html(deuda.toFixed(2));
            }
        });
    });
    $('#btnPagar').click(function() {
        $.ajax({
            url: 'php/editarPrestamo.php',
            type: 'POST',
            data: { tag: 'adeudos', id: id, cantidad: $('.deuda').html() },
            beforeSend: function() {
                $('#carga').show();
            },
            success: function(response) {
                if (response == 1) {
                    alert('Pagado Correctamente');
                    mostrarPrestamos();
                } else {
                    alert('Error');
                }
                $('#carga').hide();
            }
        });
    });
    $('#btnActualizarPrestamo').click(function() {
        var datos = [];
        var num = 0;
        $('#tbDetallePrestamo tr').each(function() {
            datos[num] = {
                libro: $(this).find('td').eq(2).html(),
                prestamo: id
            };
            num++;
        });
        var datosDetalle = {
            datos: datos,
            tag: 'actualizarDetalle',
            id: id
        }
        var conf = confirm('Esta seguro de actualizar, una vez realizado no se podra regresar!');
        if (conf) {
            $.ajax({
                url: 'php/editarPrestamo.php',
                type: 'POST',
                data: datosDetalle,
                beforeSend: function() {
                    $('#carga').show();
                },
                success: function(response) {
                    if (response == 1) {
                        alert('Actualizado Correctamente!');
                        mostrarPrestamos();
                        mostrar();
                    } else {
                        alert('Error! No fue posible actualizar');
                    }
                    $('#carga').hide();
                }
            });
        } else {
            alert('Operacion Cancelada!');
        }

    });

    function mostrar() {
        var data = "bus=" + $("#BusCon").val() + "&status=" + $('input:radio[name=filtro]:checked').val();
        $.ajax({
                url: 'php/consultas.php',
                type: 'POST',
                data: data
            })
            .done(function(res) {
                $("#verConsu").html(res);
            })
            .fail(function() {
                alert(res);
            })
    }
    mostrarPrestamos();
});