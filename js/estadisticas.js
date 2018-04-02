$(document).ready(function() {
	var meses=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

	$("#formGeneral").submit(function(e) {
		e.preventDefault();
		var datos = "metodo="+$("#metodo").val()+"&periodo="+$("#periodo").val()+"&FeIni="+$("#FeIni").val()+"&FeTer="+$("#FeTer").val();

        $.ajax({
            url: 'php/estadisticas.php',
            type: 'POST',
            data: datos,
            beforeSend: function(){
                $("#carga").show(0);                    
            }
        })
        .done(function(res) {
            var arr = new Array();
            var aux = new Array();
            var x=0, y=0, toma="";
            if($("#metodo").val()=='1'){
            	var separa=res.split("*");
            	for (var i = 1; i < separa.length; i=i+2) {
            		if($("#periodo").val()=='mes'){
            			arr[x]=[meses[(parseInt(separa[i-1])-1)],parseInt(separa[i])];
            		}else{
            			arr[x]=[separa[i-1],parseInt(separa[i])];
            		}
            		x++;
           		}
           		grafica1('graGeneral1','No. de Prestamos',$("#metodo option:selected").text(),arr);
            	grafica2('graGeneral2',arr);
            }else{
            	console.log(res);
            	var separa=res.split("/");
            	var separa1=separa[0].split("*");
            	var separa2=separa[1].split("*");
            	aux[0]="";
            	for (var i = 2; i < separa1.length; i=i+3) {
            		x++;
            		aux[x]=separa1[i];
            	}
            	arr[0]=aux;
            	for (var i = 0; i < separa1.length; i=i+3) {
            		if(separa1[i]!=toma){
            			toma=separa1[i];
            			if(i!=0){
            				y++;
            				for (var m = aux.length; m < arr[0].length; m++) {
            					aux[m]=0;
            				}
            				arr[y]=aux;
            			}	
            			aux=[];
            			x=0;
            			if($("#periodo").val()=='mes'){
            				aux[x]=meses[(parseInt(separa1[i])-1)];
            			}else{
            				aux[x]=separa1[i];
            			}
            			x++;
            		}
            		if(separa1[i+2]==arr[0][x]){
            			aux[x]=parseInt(separa1[i+1]);
            		}else{
            			aux[x]=0;
            			i=i-3;
            		}
            		x++;
            	}
            	grafica3('graGeneral1',$("#metodo option:selected").text(),arr);
            	arr=[];
            	x=0;
            	for (var i = 1; i < separa2.length; i=i+2) {
            		arr[x]=[separa2[i-1],parseInt(separa2[i])];
            		x++;
           		}
            	grafica2('graGeneral2',arr);
            }
        })
        .fail(function() {
            alert('Error');
        });
	});

	function grafica1(id,titulo1,titulo2,arr) {
		google.charts.load('current', {'packages':['corechart']});
	    google.charts.setOnLoadCallback(drawChart);

	    function drawChart() {
	        var data = new google.visualization.DataTable();
	        data.addColumn('string', 'Topping');
	        data.addColumn('number', titulo1);
	        data.addRows(arr);

	        var options = {
	        	title : titulo2,
	        	'width': 900,
	        	'height': 500
	        };

	        var chart = new google.visualization.AreaChart(document.getElementById(id));
	        chart.draw(data, options);
	        $("#carga").hide(0);
	    }	
	}

	function grafica2(id,arr) {
		google.charts.load('current', {'packages':['corechart']});
	    google.charts.setOnLoadCallback(drawChart);

	    function drawChart() {
	        var data = new google.visualization.DataTable();
	        data.addColumn('string', 'Topping');
	        data.addColumn('number', '');
	        data.addRows(arr);

	        var options = {'width':800,'height':400};

	        var chart = new google.visualization.PieChart(document.getElementById(id));
	        chart.draw(data, options);
	        $("#carga").hide(0);
	    }	
	}

	function grafica3(id,titulo,arr) {
		google.charts.load('current', {'packages':['corechart']});
	    google.charts.setOnLoadCallback(drawVisualization);

	    function drawVisualization() {
	        var data = google.visualization.arrayToDataTable(arr);

	    	var options = {
	      		title : titulo,
	      		seriesType: 'bars',
	      		'width':900,
	      		'height':500
	    	};

	    	var chart = new google.visualization.ComboChart(document.getElementById(id));
	    	chart.draw(data, options);
	    	$("#carga").hide(0);
	    }	
	}
});