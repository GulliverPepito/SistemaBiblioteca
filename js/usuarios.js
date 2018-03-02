$(document).ready(function() {
    mostrar();

    $('#FoUsu').submit(function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();

        $.ajax({
            url: 'php/agregarUsuario.php',
            type: 'POST',
            data: datos,
            beforeSend: function(){
                $("#carga").show(0);                    
            }
        })
        .done(function(res) {
            alert(res);
            $(".inpUsu").val("");
            $("#carga").hide(0);
        })
        .fail(function(res) {
            alert(res);
        });
    });  

    $("#BusUsu").keyup(function(event) {
      mostrar();
    });

    $(document).on('click', '.ModiUsu', function() {
      var datos = $(this).parent().parent();
      $("#MUsuid").val(datos.children('td:eq(1)').text());
      $("#MUsuTipo").val(datos.children('td:eq(5)').children('span:eq(0)').text());
      $("#MUsuNombre").val(datos.children('td:eq(2)').text());
      $("#MUsuApPat").val(datos.children('td:eq(3)').text());
      $("#MUsuApMat").val(datos.children('td:eq(4)').text());
      $("#MUsuNoc").val(datos.children('td:eq(8)').text());
      $("#MUsuCa").val(datos.children('td:eq(6)').children('span:eq(0)').text());
      $("#MUsuSe").val(datos.children('td:eq(7)').text());
      $("#MUsuEm").val(datos.children('td:eq(9)').text());
      $("#MUsuTe").val(datos.children('td:eq(10)').text());
      $("#MUsuDo").val(datos.children('td:eq(11)').text());
      $("#MUsuCo").val(datos.children('td:eq(12)').text());
      $("#MUsuMu").val(datos.children('td:eq(13)').text());
      $("#MUsuEst").val(datos.children('td:eq(14)').text());
      $("#MUsuCP").val(datos.children('td:eq(15)').text());
      $("#GuMUsu").attr("disabled", true);
    });

    $('#FoMoUsu').submit(function(e) {
        e.preventDefault();

        var confir= confirm("Estas seguro que quieres modificar los datos del usuario. Una vez modificados los datos estos no podrán ser recuperados jamás");

        if(confir==true){
          var datos = $(this).serializeArray();

          $.ajax({
              url: 'php/modificarUsuario.php',
              type: 'POST',
              data: datos,
              beforeSend: function(){
                  $("#carga").show(0);                    
              }
          })
          .done(function(res) {
              mostrar();
              alert(res);
              $("#carga").hide(0);
              $("#GuMUsu").attr("disabled", true);
          })
          .fail(function(res) {
              alert(res);
          });
        }else{
          alert("Has cancelado la operación");
        }
    });

    $(document).on('keyup change', '.MinpUsu', function() {
      $("#GuMUsu").attr("disabled", false);
    });

    $(document).on('click', '.BorraUsu', function() {
      var confir= confirm("Estas seguro que quieres eliminar este usuario. Si eliminas este usuario todos sus datos serán eliminados junto con los datos relacionados al mismo y no podrán ser recuperados jamás");

      if(confir==true){
        var data="metodo=3&id="+$(this).parent().parent().children('td:eq(1)').text();
          $.ajax({
              url: 'php/modificarUsuario.php',
              type: 'POST',
              data: data,
              beforeSend: function(){
                  $("#carga").show(0);                    
              }
          })
          .done(function(res) {
              alert(res);
              mostrar();
              $("#carga").hide(0);
          })
          .fail(function(res) {
              alert(res);
          });
        }else{
          alert("Has cancelado la operación");  
        }
    });

    function mostrar() {
      var data="metodo=1&busca="+$("#BusUsu").val();
        $.ajax({
            url: 'php/modificarUsuario.php',
            type: 'POST',
            data: data
        })
        .done(function(res) {
            $("#verUsu").html(res);
        })
        .fail(function(res) {
            alert(res);
        });             
    }  
});
