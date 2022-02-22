<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(grafica);

      function grafica() {
        var data = google.visualization.arrayToDataTable([
        ["Tipo","Aceptadas","Rechazadas"],
          <?php
            for($i=0; $i<count($tipo); $i++){
                print "['".$tipo[$i]."', ".$txsPor0210[$i].", ".$txsPor0420[$i]."]";
                if($i<count($tipo)) print ",";
              }
            
          ?>
        ]);
        var opciones = {
          chart: {
            title: 'Txs por Tipo',
            // subtitle: '2017'
          },
          colors:['#28A745','#DC3545'],
          bars: 'horizontal',
          fontSize:16,
          fontName:"Times",
          hAxis: {
            // title: 'Porcenjate de participación',
            titleTextStyle: {color: 'black', fontSize:16},
            textPosition: "out",
            textStyle: {color:"black", fontSize:16, fontName:"Times",bold:true, italic: true},
            gridlines: {color: 'white'},
            backgroundColor:'transparent',
          },
          vAxis: {
            // title: 'Navegadores',
            titleTextStyle: {color: 'black', bold:true, fontSize:16, fontName: "Arial"},
            textStyle: {color: 'black', bold:true, fontSize:16, fontName: "Arial"},
            gridlines: {color: 'white'},
            backgroundColor:'transparent',
          },
          legend: { position: 'none'},
          titleTextStyle: { 
            color: "gray",
            fontSize: 20,
            italic: false 
          },
          height: 400,
          backgroundColor:'transparent',
        };

        var chart = new google.charts.Bar(document.getElementById('grafica'));
        chart.draw(data, google.charts.Bar.convertOptions(opciones));
      }
    </script>