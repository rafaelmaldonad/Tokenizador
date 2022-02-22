<script type="text/javascript">

// Carga el API de visualización y el paquete corechart
google.charts.load('current', {'packages':['corechart']});

// Define la función callback para crear la gráfica
google.charts.setOnLoadCallback(paises);


// Función para poblar la gráfica
// iniciar el gráfico, pasa los datos y los dibuja
function paises() {

  // Crea la tabla de la gráfica
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Txs');
  data.addColumn('number', 'Extension');
  data.addRows([
    
  <?php
    //
    for($i=0; $i<count($status); $i++){
      print "['".$status[$i]."', ".$valoresPor[$i]."]";
      if($i<count($status)) print ",";
    }
  ?>
   
  ]);

  // Opciones de la gráfica
  var opciones = {'title':'% de Aprobación',
                'is3D':true,
                 'width':700,
                 'height':400,
                 backgroundColor:'transparent',
                  slices: {1: {offset:0.1}},
            
              };

  // Inicia la gráfica
  var chart = new google.visualization.PieChart(document.getElementById('genTxsPor'));
  chart.draw(data, opciones);
}




</script>