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
    mostrarDatos();
    $(document).on('click', '#btnEditar', function() {
        var isbn = $(this).parents('tr').find('span').eq(0).html();
        var codigoBarras = $(this).parents('tr').find('span').eq(1).html();
        var titulo = $(this).parents('tr').find('span').eq(2).html();
        var autor = $(this).parents('tr').find('span').eq(3).html();
        var tituloOriginal = $(this).parents('tr').find('span').eq(4).html();
        var temaGeneral = $(this).parents('tr').find('span').eq(5).html();
        var editorial = $(this).parents('tr').find('span').eq(7).html();
        var paginas = $(this).parents('tr').find('span').eq(8).html();
        var ubicacion = $(this).parents('tr').find('span').eq(9).html();
        var carrera = $(this).parents('tr').find('span').eq(10).html();
        var anio = $(this).parents('tr').find('span').eq(12).html();
        var lugar = $(this).parents('tr').find('span').eq(13).html();
        var volumen = $(this).parents('tr').find('span').eq(14).html();
        var num = $(this).parents('tr').find('span').eq(15).html();
        var url = $(this).parents('tr').find('span').eq(16).html();
        var temaEspecifico = $(this).parents('tr').find('span').eq(17).html();
        $('#isbnEditar').val(isbn);
        $('#codigoBarrasEditar').val(codigoBarras);
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
    });

});