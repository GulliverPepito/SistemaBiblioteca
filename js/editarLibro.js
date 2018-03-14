$(document).ready(function() {
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

    function mostrarDatosDetalle(id) {
        $.ajax({
            url: 'php/modificarLibro.php',
            type: 'POST',
            data: { tag: 'mostrarDetalle', id: id },
            success: function(response) {
                $('#detalleLibro').html(response);
            }
        });
    }
    mostrarDatos();
    $(document).on('click', '#btnEditar', function() {
        var id = $(this).parents('tr').find('span').eq(0).html();
        var titulo = $(this).parents('tr').find('span').eq(1).html();
        var autor = $(this).parents('tr').find('span').eq(2).html();
        var tituloOriginal = $(this).parents('tr').find('span').eq(3).html();
        var temaGeneral = $(this).parents('tr').find('span').eq(4).html();
        var editorial = $(this).parents('tr').find('span').eq(6).html();
        var paginas = $(this).parents('tr').find('span').eq(7).html();
        var ubicacion = $(this).parents('tr').find('span').eq(8).html();
        var carrera = $(this).parents('tr').find('span').eq(9).html();
        var anio = $(this).parents('tr').find('span').eq(11).html();
        var lugar = $(this).parents('tr').find('span').eq(12).html();
        var volumen = $(this).parents('tr').find('span').eq(13).html();
        var num = $(this).parents('tr').find('span').eq(14).html();
        var url = $(this).parents('tr').find('span').eq(15).html();
        var temaEspecifico = $(this).parents('tr').find('span').eq(16).html();
        $('#idEditar').val(id);
        $('#tituloEditar').val(titulo);
        $('#autorEditar').val(autor);
        $('#tituloOriginalEditar').val(tituloOriginal);
        $('#anioEdicionEditar').val(anio);
        $('#lugarEdicionEditar').val(lugar);
        $('#editorialEditar').val(editorial);
        $('#paginasEditar').val(paginas);
        $('#ubicacionEditar').val(ubicacion);
        $('#volumenEditar').val(volumen);
        $('#numSerieEditar').val(num);
        $('#urlEditar').val(url);
        $('#temaGeneralEditar').val(temaGeneral);
        $('#temaEspecificoEditar').val(temaEspecifico);
        $('#carreraEditar').val(carrera);
        //alert(datos);
    });
    $(document).on('click', '#agregarMas', function() {
        $(this).parents('tr').find('.agregar').toggle('slow');
    });
    $(document).on('click', '#btnVerMas', function() {
        $(this).parents('tr').find('.noMostrar').toggle('slow');
        var id = $(this).parents('tr').find('span').eq(0).html();
        mostrarDatosDetalle(id);
    });
    $(document).on('keyup change', '.formEditar', function() {
        $("#GuardarLibro").attr("disabled", false);
    });
    $('#GuardarLibro').click(function() {
        var confir = confirm("Estas seguro que quieres modificar los datos del Libro. Una vez modificados los datos estos no podrán ser recuperados jamás");
        if (confir == true) {
            var datos = $('#formEditarLibro').serializeArray();
            $.ajax({
                url: 'php/modificarLibro.php',
                type: 'POST',
                data: datos,
                beforeSend: function() {
                    $("#carga").show(0);
                },
                success: function(response) {
                    if (response == 1) {
                        alert('Actualizado Correctamente');
                        $('#carga').hide(0);
                        $("#GuardarLibro").attr("disabled", true);
                        mostrarDatos();
                    } else {
                        alert('Error no se ha podido Actualizar');
                        $('#carga').hide(0);
                        $("#GuardarLibro").attr("disabled", true);
                    }
                }
            });
        } else {
            alert("Has cancelado la operación");
        }
    });
    $(document).on('click', '#agregarMasModificar', function() {
        var id = $(this).parents('tr').find('span').eq(0).html();
        var datos = {
            id: id,
            isnb: $(this).parents('tr').find('#isnbModificar').val(),
            codigoBarras: $(this).parents('tr').find('#codigoBarrasModificar').val(),
            tag: 'agregarDetalle'
        };
        $.ajax({
            url: 'php/modificarLibro.php',
            type: 'POST',
            data: datos,
            success: function(response) {
                if (response == 1) {
                    mostrarDatosDetalle(id);
                    $('#isnbModificar').val('');
                    $('#codigoBarrasModificar').val('');
                } else {
                    alert('Error no se pudo agregar');
                }
            }

        });
    });

});