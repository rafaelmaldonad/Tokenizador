<?php

    include_once "conexion.php";

    $query = "select KC4_TERM_ATTEND_IND,KC4_TERM_OPER_IND,KC4_TERM_LOC_IND,KC4_CRDHLDR_PRESENT_IND,KC4_CRD_PRESENT_IND,KC4_CRD_CAPTR_IND,KC4_TXN_STAT_IND,KC4_TXN_SEC_IND,KC4_TXN_RTN_IND,KC4_CRDHLDR_ACTVT_TERM_IND,KC4_TERM_INPUT_CAP_IND,KC4_CRDHLDR_ID_METHOD from test ";

    $res = $conn->prepare($query);

    $res->execute();

    $info = array();
    $tipo = array();
    $codigo = array();
    $kq2 = array();
    $status = array();

   
    while($data = $res->fetch(PDO::FETCH_ASSOC)) {
            $info[] = $data;
           
    }

    $campo1 = array();
    $campo2 = array();
    $campo3 = array();
    $campo4 = array();
    $campo5 = array();
    $campo6 = array();
    $campo7 = array();
    $campo8 = array();
    $campo9 = array();
    $campo10 = array();
    $campo11 = array();
    $campo12 = array();

    for($i=0;$i<sizeof($info);$i++) {
      array_push($campo1,$info[$i]["KC4_TERM_ATTEND_IND"]);
      array_push($campo2,$info[$i]["KC4_TERM_OPER_IND"]);
      array_push($campo3,$info[$i]["KC4_TERM_LOC_IND"]);
      array_push($campo4,$info[$i]["KC4_CRDHLDR_PRESENT_IND"]);
      array_push($campo5,$info[$i]["KC4_CRD_PRESENT_IND"]);
      array_push($campo6,$info[$i]["KC4_CRD_CAPTR_IND"]);
      array_push($campo7,$info[$i]["KC4_TXN_STAT_IND"]);
      array_push($campo8,$info[$i]["KC4_TXN_SEC_IND"]);
      array_push($campo9,$info[$i]["KC4_TXN_RTN_IND"]);
      array_push($campo10,$info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]);
      array_push($campo11,$info[$i]["KC4_TERM_INPUT_CAP_IND"]);
      array_push($campo12,$info[$i]["KC4_CRDHLDR_ID_METHOD"]);
    }

    $campo1_extra = array_unique($campo1);
    $campo1_extra_key = array_keys($campo1_extra);

    $campo2_extra = array_unique($campo2);
    $campo2_extra_key = array_keys($campo2_extra);

    $campo3_extra = array_unique($campo3);
    $campo3_extra_key = array_keys($campo3_extra);

    $campo4_extra = array_unique($campo4);
    $campo4_extra_key = array_keys($campo4_extra);

    $campo5_extra = array_unique($campo5);
    $campo5_extra_key = array_keys($campo5_extra);

    $campo6_extra = array_unique($campo6);
    $campo6_extra_key = array_keys($campo6_extra);

    $campo7_extra = array_unique($campo7);
    $campo7_extra_key = array_keys($campo7_extra);

    $campo8_extra = array_unique($campo8);
    $campo8_extra_key = array_keys($campo8_extra);

    $campo9_extra = array_unique($campo9);
    $campo9_extra_key = array_keys($campo9_extra);

    $campo10_extra = array_unique($campo10);
    $campo10_extra_key = array_keys($campo10_extra);

    $campo11_extra = array_unique($campo11);
    $campo11_extra_key = array_keys($campo11_extra);

    $campo12_extra = array_unique($campo12);
    $campo12_extra_key = array_keys($campo12_extra);

    if(isset($_POST["enviar"])) {

      $campo1 = $_POST["campo1"];
      $campo2 = $_POST["campo2"];
      $campo3 = $_POST["campo3"];
      $campo4 = $_POST["campo4"];
      $campo5 = $_POST["campo5"];
      $campo6 = $_POST["campo6"];
      $campo7 = $_POST["campo7"];
      $campo8 = $_POST["campo8"];
      $campo9 = $_POST["campo9"];
      $campo10 = $_POST["campo10"];
      $campo11 = $_POST["campo11"];
      $campo12 = $_POST["campo12"];


      if($campo1 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TERM_ATTEND_IND=$campo1";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo2 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TERM_OPER_IND=$campo2";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo3 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TERM_LOC_IND=$campo3";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo4 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_CRDHLDR_PRESENT_IND=$campo4";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo5 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_CRD_PRESENT_IND=$campo5";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo6 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_CRD_CAPTR_IND=$campo6";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo7 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TXN_STAT_IND=$campo7";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo8 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TXN_SEC_IND=$campo8";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo9 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TXN_RTN_IND=$campo9";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo10 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_CRDHLDR_ACTVT_TERM_IND=$campo10";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }


      if($campo11 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_TERM_INPUT_CAP_IND=$campo11";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }
 

      if($campo12 !== "") {

        
        $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KC4_CRDHLDR_ID_METHOD=$campo12";

        $res2 = $conn->prepare($query2);
  
        $res2->execute();
  
        $info2 = array();
  
        while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
          $info2[] = $data;
         
        }

      }

      // $campo1 = $_POST["campo1"];
      // $campo2 = $_POST["campo2"];
      // $campo3 = $_POST["campo3"];
      // $campo4 = $_POST["campo4"];
      // $campo5 = $_POST["campo5"];
      // $campo6 = $_POST["campo6"];
      // $campo7 = $_POST["campo7"];
      // $campo8 = $_POST["campo8"];
      // $campo9 = $_POST["campo9"];
      // $campo10 = $_POST["campo10"];
      // $campo11 = $_POST["campo11"];
      // $campo12 = $_POST["campo12"];

      // echo $campo1.'<br>';
      // echo $campo2.'<br>';
      // echo $campo3.'<br>';
      // echo $campo4.'<br>';
      // echo $campo5.'<br>';
      // echo $campo6.'<br>';
      // echo $campo7.'<br>';
      // echo $campo8.'<br>';
      // echo $campo9.'<br>';
      // echo $campo10.'<br>';
      // echo $campo11.'<br>';
      // echo $campo12.'<br>';

      

    
    } else {

      $query2 = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test";

      $res2 = $conn->prepare($query2);
  
      $res2->execute();

      $info2 = array();

      while($data = $res2->fetch(PDO::FETCH_ASSOC)) {
        $info2[] = $data;
       
      }

      // echo sizeof($info2);

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
                <a href="tokenc4Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token C4
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenc0Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token C0
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb3Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B3
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb4Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B4
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb2Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B2
                </p>
                </a>
            </li>

          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- ********************************************************** -->

  <div class="content-wrapper mt-2" style="background:white !important" style="overflow:scroll">

     <!-- Content Header (Page header) -->
     <div class="content-header text-center">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-center text-dark display-2">Análisis por Token c4</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Content Header (Page header) -->
   <div class="content-header text-center">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col-sm-12">
           
          <form action="tokenc4Index.php" method="post">

            <div class="form-row">

           
            <br>
              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TERM_ATTEND_IND</label>
                <select class="form-control" id="campo1" name="campo1">
                  <option value="">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo1_extra);$i++) { ?>
                    <option value="<?php echo $campo1_extra[$campo1_extra_key[$i]]; ?>"><?php echo $campo1_extra[$campo1_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TERM_OPER_IND</label>
                <select class="form-control" id="campo2" name="campo2">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo2_extra);$i++) { ?>
                    <option value="<?php echo $campo2_extra[$campo2_extra_key[$i]]; ?>"><?php echo $campo2_extra[$campo2_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TERM_LOC_IND</label>
                <select class="form-control" id="campo3" name="campo3">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo3_extra);$i++) { ?>
                    <option value="<?php echo $campo3_extra[$campo3_extra_key[$i]]; ?>"><?php echo $campo3_extra[$campo3_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KC4_CRDHLDR_PRESENT_IND</label>
                <select class="form-control" id="campo4" name="campo4">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo4_extra);$i++) { ?>
                    <option value="<?php echo $campo4_extra[$campo4_extra_key[$i]]; ?>"><?php echo $campo4_extra[$campo4_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_CRD_PRESENT_IND</label>
                <select class="form-control" id="campo5" name="campo5">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo5_extra);$i++) { ?>
                    <option value="<?php echo $campo5_extra[$campo5_extra_key[$i]]; ?>"><?php echo $campo5_extra[$campo5_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_CRD_CAPTR_IND</label>
                <select class="form-control" id="campo6" name="campo6">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo6_extra);$i++) { ?>
                    <option value="<?php echo $campo6_extra[$campo6_extra_key[$i]]; ?>"><?php echo $campo6_extra[$campo6_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

          </div>


          <div class="form-row">
              
              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TXN_STAT_IND</label>
                <select class="form-control" id="campo7" name="campo7">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo7_extra);$i++) { ?>
                    <option value="<?php echo $campo7_extra[$campo7_extra_key[$i]]; ?>"><?php echo $campo7_extra[$campo7_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TXN_SEC_IND</label>
                <select class="form-control" id="campo8" name="campo8">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo8_extra);$i++) { ?>
                    <option value="<?php echo $campo8_extra[$campo8_extra_key[$i]]; ?>"><?php echo $campo8_extra[$campo8_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TXN_RTN_IND</label>
                <select class="form-control" id="campo9" name="campo9">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo9_extra);$i++) { ?>
                    <option value="<?php echo $campo9_extra[$campo9_extra_key[$i]]; ?>"><?php echo $campo9_extra[$campo9_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KC4_CRDHLDR_ACTVT_TERM_IND</label>
                <select class="form-control" id="campo10" name="campo10">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo10_extra);$i++) { ?>
                    <option value="<?php echo $campo10_extra[$campo10_extra_key[$i]]; ?>"><?php echo $campo10_extra[$campo10_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_TERM_INPUT_CAP_IND</label>
                <select class="form-control" id="campo11" name="campo11">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo11_extra);$i++) { ?>
                    <option value="<?php echo $campo11_extra[$campo11_extra_key[$i]]; ?>"><?php echo $campo11_extra[$campo11_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KC4_CRDHLDR_ID_METHOD</label>
                <select class="form-control" id="campo12" name="campo12">
                <option value="">sin valor</option>
                <?php for($i=0;$i<sizeof($campo12_extra);$i++) { ?>
                    <option value="<?php echo $campo12_extra[$campo12_extra_key[$i]]; ?>"><?php echo $campo12_extra[$campo12_extra_key[$i]]; ?></option>
                 <?php } ?>
                  </select>
              </div>

          </div>

          <div class="form-row mt-3">
              <div class="col-5"></div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary btn-block" name="enviar">Enviar</button> 
              </div>   
          </div>

        </form>

          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <section >

                    <div class="card">
                       
                        <div class="card-body ">
                            <table id="example1" border="2px">
                                <thead>
                                <tr>
                                    <th>KC4_TERM_ATTEND_IND</th>
                                    <th>KC4_TERM_OPER_IND</th>
                                    <th>KC4_TERM_LOC_IND</th>
                                    <th>KC4_CRDHLDR_PRESENT_IND</th>
                                    <th>KC4_CRD_PRESENT_IND</th>
                                    <th>KC4_CRD_CAPTR_IND</th>
                                    <th>KC4_TXN_STAT_IND</th>
                                    <th>KC4_TXN_SEC_IND</th>
                                    <th>KC4_TXN_RTN_IND</th>
                                    <th>KC4_CRDHLDR_ACTVT_TERM_IND</th>
                                    <th>KC4_TERM_INPUT_CAP_IND</th>
                                    <th>KC4_CRDHLDR_ID_METHOD</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($info);$i++) { ?>
                                        <tr>

                                            <!-- Validacion del primer Token -->
                                            <?php if($info[$i]["KC4_TERM_ATTEND_IND"]>=0 && $info[$i]["KC4_TERM_ATTEND_IND"] <= 2) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TERM_ATTEND_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TERM_ATTEND_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del primer Token -->


                                            <!-- Validacion del segundo token -->
                                            <?php if($info[$i]["KC4_TERM_OPER_IND"]==0) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TERM_OPER_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TERM_OPER_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del segundo Token -->


                                            <!-- Validacion del tercer token -->
                                            <?php if($info[$i]["KC4_TERM_LOC_IND"]>=0 && $info[$i]["KC4_TERM_LOC_IND"]<=3) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TERM_LOC_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TERM_LOC_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del tercer Token -->



                                            <!-- Validacion del cuarto token -->
                                            <?php if($info[$i]["KC4_CRDHLDR_PRESENT_IND"]>=0 && $info[$i]["KC4_CRDHLDR_PRESENT_IND"]<=5) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_CRDHLDR_PRESENT_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_CRDHLDR_PRESENT_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del cuarto Token -->



                                            <!-- Validacion del quinto token -->
                                            <?php if($info[$i]["KC4_CRD_PRESENT_IND"]>=0 && $info[$i]["KC4_CRD_PRESENT_IND"]<=1) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_CRD_PRESENT_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_CRD_PRESENT_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del quinto Token -->

                                            

                                            <!-- Validacion del sexto token -->
                                            <?php if($info[$i]["KC4_CRD_CAPTR_IND"]>=0 && $info[$i]["KC4_CRD_CAPTR_IND"]<=1) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_CRD_CAPTR_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_CRD_CAPTR_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del sexto Token -->


                                            
                                            <!-- Validacion del septimo token -->
                                            <?php if($info[$i]["KC4_TXN_STAT_IND"]==0 || $info[$i]["KC4_TXN_STAT_IND"]==4) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TXN_STAT_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TXN_STAT_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del septimo Token -->



                                            <!-- Validacion del octavo token -->
                                            <?php if($info[$i]["KC4_TXN_SEC_IND"]>=0 && $info[$i]["KC4_TXN_SEC_IND"]<=2) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TXN_SEC_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TXN_SEC_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del octavo Token -->



                                             <!-- Validacion del noveno token -->
                                             <?php if($info[$i]["KC4_TXN_RTN_IND"]==0 || $info[$i]["KC4_TXN_RTN_IND"]==1 || $info[$i]["KC4_TXN_RTN_IND"]==3) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TXN_RTN_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TXN_RTN_IND"]; ?></td>
                                            <?php } ?>
                                            <!-- Final del noveno Token -->

                                            
                                          

                                            <!-- Validacion del decimo token -->
                                            <?php if($info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]>=0 && $info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]<=4 ||$info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]>=6 && $info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]<=9) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_CRDHLDR_ACTVT_TERM_IND"] ?></td>
                                            <?php } ?>
                                            <!-- Final del decimo Token -->



                                             <!-- Validacion del decimo primero token -->
                                             <?php if($info[$i]["KC4_TERM_INPUT_CAP_IND"]>=0 && $info[$i]["KC4_TERM_INPUT_CAP_IND"]<=9) { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_TERM_INPUT_CAP_IND"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_TERM_INPUT_CAP_IND"] ?></td>
                                            <?php } ?>
                                            <!-- Final del decimo primero Token -->



                                            <!-- Validacion del decimo segundo token -->
                                            <?php if($info[$i]["KC4_CRDHLDR_ID_METHOD"]>=0 && $info[$i]["KC4_CRDHLDR_ID_METHOD"]<=5 || $info[$i]["KC4_CRDHLDR_ID_METHOD"]==9 || $info[$i]["KC4_CRDHLDR_ID_METHOD"]=="") { ?>
                                              <td style="background:green"><?php echo $info[$i]["KC4_CRDHLDR_ID_METHOD"]; ?></td>
                                            <?php } else { ?>
                                              <td style="background:red"><?php echo $info[$i]["KC4_CRDHLDR_ID_METHOD"] ?></td>
                                            <?php } ?>
                                            <!-- Final del decimo segundo Token -->
                                          
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- *************************************************************************************************** -->
                       

                        <div class="card-body ">
                            <table id="example2" border="2px">
                                <thead>
                                <tr>
                                    <th>FIID_TARJ</th>
                                    <th>FIID_COMER</th>
                                    <th>NOMBRE_DE_TERMINAL</th>
                                    <th>CODIGO_RESPUESTA</th>
                                    <th>R</th>
                                    <th>KQ2_ID_MEDIO_ACCESO</th>
                                    <th>ENTRY_MODE</th>
                                    <th>MONTO</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($info2);$i++) { ?>
                                        <tr>

                                            <!-- Validacion del primer Token -->
                                            <td><?php echo $info2[$i]["FIID_TARJ"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["FIID_COMER"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["NOMBRE_DE_TERMINAL"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["CODIGO_RESPUESTA"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["R"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["KQ2_ID_MEDIO_ACCESO"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["ENTRY_MODE"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $info2[$i]["MONTO1"]; ?></td>
                                            <!-- Final del primer Token -->

                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    
    </section>
  </div>







  <!-- ********************************************************** -->

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
      "buttons": ["csv", "excel", "pdf"]
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

