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
        var datos = $(this).parents('tr').find('span').eq(0).html();
        alert(datos);
    });
    $(document).on('click', '#agregarMas', function() {
        $(this).parents('tr').find('.agregar').toggle('slow');
    });
    $(document).on('click', '#btnVerMas', function() {
        $(this).parents('tr').find('.noMostrar').toggle('slow');
    });

});