<?php

include_once "conexion.php";

$query = "select t.NOMBRE_DE_TERMINAL,t.MONTOA,t.TXSA,j.MONTOR,j.TXSR from 
(
select NOMBRE_DE_TERMINAL,sum(MONTO1) AS MONTOA, count(*) as TXSA from kmn_0101 where CODIGO_RESPUESTA < '010' group by NOMBRE_DE_TERMINAL
) AS t inner join 
(
select NOMBRE_DE_TERMINAL,sum(MONTO1) AS MONTOR, count(*) as TXSR from kmn_0101 where CODIGO_RESPUESTA >= '010' group by NOMBRE_DE_TERMINAL
) as j on t.NOMBRE_DE_TERMINAL = j.NOMBRE_DE_TERMINAL order by t.TXSA desc limit 10";

$res = $conn->prepare($query);

$res->execute();


$info3 = array();
while($data = $res->fetch(PDO::FETCH_ASSOC)) {
    $info3[] = $data;
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PyJCSystem</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(grafica2);

      function grafica2() {
        var data = google.visualization.arrayToDataTable([
        ["Comercio","Aceptadas","Rechazadas"],
          <?php
            for($i=0; $i<count($info3); $i++){
                print "['".$info3[$i]["NOMBRE_DE_TERMINAL"]."', ".$info3[$i]["TXSA"].", ".$info3[$i]["TXSR"]."]";
                if($i<count($info3)) print ",";
              }
            
          ?>
        ]);
        var opciones = {
          chart: {
            title: 'Txs por Comercio',
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
          height: 700,
          width:950,
          backgroundColor:'transparent',
        };

        var chart = new google.charts.Bar(document.getElementById('grafica2'));
        chart.draw(data, google.charts.Bar.convertOptions(opciones));
      }
    </script>


</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PyJCSystem</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    General
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="medioAccesoIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Kq2 Medio Acceso
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="codigoRespuestaIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Código Respuesta
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="entryModeIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Entry Mode
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="comercioIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Comercios
                </p>
                </a>
            </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- *********************************************************************** -->

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:white !important">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Txs por Comercio</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Comercio</th>
                                    <th>Txs Aceptadas</th>
                                    <th>Monto Aceptado</th>
                                    <th>Txs Rechazadas</th>
                                    <th>Monto Rechazado</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($info3);$i++) { ?>
                                        </tr>
                                            <td><?php echo $info3[$i]["NOMBRE_DE_TERMINAL"] ?></td>
                                            <td><?php echo $info3[$i]["TXSA"] ?></td>
                                            <td><?php echo $info3[$i]["MONTOA"] ?></td>
                                            <td><?php echo $info3[$i]["TXSR"] ?></td>
                                            <td><?php echo $info3[$i]["MONTOR"] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>

        <section class="col-lg-12 connectedSortable" style="height:800px">
            <div id="grafica2"></div>
        </section>








    <!-- ****************************************************************** -->
    

    <!-- /.content-wrapper -->
   <footer class="main-footer text-center">
    <strong>Copyright</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>



<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>