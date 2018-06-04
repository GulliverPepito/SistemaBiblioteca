$(document).ready(function() {
    areas();
    carreras();
    temas();
    ubicacion();
    selectAreas();

    $("#btnGuardarAreas").click(function() {
        var data = "metodo=5&nombre=" + $("#area").val();
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: data
            })
            .done(function(res) {
                alert(res);
                $("#area").val("");
                areas();
                selectAreas();
            })
            .fail(function() {
                console.log("Error");
            });
    });

    $("#agregarCarrera").click(function() {
        var data = "metodo=6&nombre=" + $("#Carrera").val() + "&codigo=" + $("#codigo").val();
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: data
            })
            .done(function(res) {
                alert(res);
                $("#Carrera").val("");
                $("#codigo").val("");
                carreras();
            })
            .fail(function() {
                console.log("Error");
            });
    });

    $("#agregarTema").click(function() {
        var data = "metodo=7&nombre=" + $("#tema").val();
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: data
            })
            .done(function(res) {
                alert(res);
                $("#tema").val("");
                temas();
            })
            .fail(function() {
                console.log("Error");
            });
    });

    $("#agregarUbicacion").click(function() {
        var data = "metodo=9&id=" + $("#area1").val() + "&fila=" + $("#Ubicacion").val();
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: data
            })
            .done(function(res) {
                alert(res);
                $("#area1").val("");
                $("#Ubicacion").val("");
                ubicacion();
            })
            .fail(function() {
                console.log("Error");
            });
    });

    function areas() {
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: "metodo=1"
            })
            .done(function(res) {
                $("#tablaAreas").html(res);
            })
            .fail(function() {
                console.log("Error");
            });
    }

    function carreras() {
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: "metodo=2"
            })
            .done(function(res) {
                $("#tablaCarreras").html(res);
            })
            .fail(function() {
                console.log("Error");
            });
    }

    function temas() {
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: "metodo=3"
            })
            .done(function(res) {
                $("#tablaTemas").html(res);
            })
            .fail(function() {
                console.log("Error");
            });
    }

    function ubicacion() {
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: "metodo=4"
            })
            .done(function(res) {
                $("#tablaUbicacion").html(res);
            })
            .fail(function() {
                console.log("Error");
            });
    }

    function selectAreas() {
        $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: "metodo=8"
            })
            .done(function(res) {
                $("#area1").html(res);
                $("#area1Editar").html(res);
            })
            .fail(function() {
                console.log("Error");
            });
    }
    var id;
    $(document).on('click', '.ModiArea', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var area = $(this).parents('tr').find('td').eq(1).html();
        $('#areaEditar').val(area);
    });
    $(document).on('click', '.ModiTema', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var tema = $(this).parents('tr').find('td').eq(1).html();
        $('#temaEditar').val(tema);
    });
    $(document).on('click', '.ModiUbicacion', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var area = $(this).parents('tr').find('td').eq(2).html();
        var fila = $(this).parents('tr').find('td').eq(1).html();
        $('#area1Editar').val(area);
        $('#UbicacionEditar').val(fila);
    });

    $(document).on('click', '.ModiCarre', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var carrera = $(this).parents('tr').find('td').eq(1).html();
        var codigo = $(this).parents('tr').find('td').eq(2).html();
        $('#CarreraEditar').val(carrera);
        $('#codigoEditar').val(codigo);
    });
    $(document).on('keyup change', '.editar', function() {
        $('.guardar').attr('disabled', false);
    });
    $('#btnActualizarArea').click(function() {
        var conf = confirm('¿Esta seguro que desea Actualizarlo? Una vez actualizado se quedaron los dato');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'actualizarArea', id: id, area: $('#areaEditar').val() },
                success: function(response) {
                    if (response == 1) {
                        alert('Guardado Exitosamente!!');
                        areas();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $('#btnActualizarCarrera').click(function() {
        var conf = confirm('¿Esta seguro que desea Actualizarlo? Una vez actualizado se quedaron los datos');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'actualizarCarrera', id: id, carrera: $('#CarreraEditar').val(), codigo: $('#codigoEditar').val() },
                success: function(response) {
                    if (response == 1) {
                        alert('Guardado Exitosamente!!');
                        carreras();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $('#btnActualizarTema').click(function() {
        var conf = confirm('¿Esta seguro que desea Actualizarlo? Una vez actualizado se quedaron los datos');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'actualizarTema', id: id, tema: $('#temaEditar').val() },
                success: function(response) {
                    if (response == 1) {
                        alert('Guardado Exitosamente!!');
                        temas();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $('#btnActualizarUbicacion').click(function() {
        var conf = confirm('¿Esta seguro que desea Actualizarlo? Una vez actualizado se quedaron los datos');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'actualizarUbicacion', id: id, area: $('#area1Editar').val(), ubicacion: $('#UbicacionEditar').val() },
                success: function(response) {
                    if (response == 1) {
                        alert('Guardado Exitosamente!!');
                        ubicacion();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $(document).on('click', '.BorraArea', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var conf = confirm('¿Esta seguro de Eliminarlo? Una vez eliminado no se podra recuperar');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'eliminarArea', id: id },
                success: function(response) {
                    if (response == 1) {
                        alert('Eliminado Correctamente!!');
                        areas();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $(document).on('click', '.BorraCarre', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var conf = confirm('¿Esta seguro de Eliminarlo? Una vez eliminado no se podra recuperar');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'eliminarCarrera', id: id },
                success: function(response) {
                    if (response == 1) {
                        alert('Eliminado Correctamente!!');
                        carreras();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $(document).on('click', '.BorraTema', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var conf = confirm('¿Esta seguro de Eliminarlo? Una vez eliminado no se podra recuperar');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'eliminarTema', id: id },
                success: function(response) {
                    if (response == 1) {
                        alert('Eliminado Correctamente!!');
                        temas();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
    $(document).on('click', '.BorraUbicacion', function() {
        id = $(this).parents('tr').find('td').eq(0).html();
        var conf = confirm('¿Esta seguro de Eliminarlo? Una vez eliminado no se podra recuperar');
        if (conf == 1) {
            $.ajax({
                url: 'php/agregar.php',
                type: 'POST',
                data: { metodo: 'eliminarUbicacion', id: id },
                success: function(response) {
                    if (response == 1) {
                        alert('Eliminado Correctamente!!');
                        ubicacion();
                    } else {
                        alert('Error');
                    }
                }
            });
        } else {
            alert('Operacion Cancelada');
        }
    });
});