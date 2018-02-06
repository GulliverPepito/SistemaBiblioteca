$(document).ready(function (){
       $('.libros').hide();
       $('.prestamos').hide();
       $('.consultas').hide();
        $('.usuarios').hide();
         var li = 0, p = 0, c=0, u=0;
       $('#libros').click(function(){
           if(li==0){
               $('.libros').slideDown("slow");
               li=1;
           }else{
               $('.libros').hide("slow");
               li = 0;
           }
          
       });
        $('#prestamos').click(function(){
           if(p==0){
               $('.prestamos').slideDown("slow");
               p=1;
           }else{
               $('.prestamos').hide("slow");
               p = 0;
           }
          	
       });
        $('#consultas').click(function(){
           if(c==0){
               $('.consultas').slideDown("slow");
               c=1;
           }else{
               $('.consultas').hide("slow");
               c = 0;
           }
          
       });
        $('#usuarios').click(function(){
           if(u==0){
               $('.usuarios').slideDown("slow");
               u=1;
           }else{
               $('.usuarios').hide("slow");
               u = 0;
           }
          
       });
	   $(document).on("click","#registrarLibro",function(){
		   $(".mostrar").hide();
		   $("#agregarLibro").show();
	   });
	   
	   $(document).on("click","#AgreUsu",function(){
		   $(".mostrar").hide();
		   $("#ReUsu").show();
	   });
	   
	   $(document).on("click","#MoUsu",function(){
		   $(".mostrar").hide();
		   $("#VerUsu").show();
	   });
    });
	
