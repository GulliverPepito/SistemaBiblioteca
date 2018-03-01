$(document).ready(function() {
    function mostrarDatos() {
        $.ajax({
            url: 'modificarLibro.php',
            type: 'POST',
            data: { tag: 'mostrarDatos' },
            success: function(response) {

            }
        });
    }
    // mostrarDatos();
    $('#btnVerMas').click(function() {
        $('.noMostrar').toggle('slow');
    });
});