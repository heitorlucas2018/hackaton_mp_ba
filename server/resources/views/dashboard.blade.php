<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ciranda
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo flex">
        <a href="./dashboard.html" class="simple-text logo-normal">
          <img src="../assets/img/logo.png" alt="" srcset="">
        </a>
        <i class="fas fa-bars " style="float: right; align-self: center; "></i>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="fas fa-chalkboard"></i>
              <p>Cadastrar Relato</p>
            </a>
          </li>
          <li>
            <a href="rede_Protecao">
              <i class="fas fa-network-wired"></i>
              <p>Rede de Proteção</p>
            </a>
          </li>
          <li>
            <a href="/map">
              <i class="now-ui-icons location_map-big"></i>
              <p>Mapa</p>
            </a>
          </li>
          <li>
            <a href="./about.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>Sobre</p>
            </a>
          </li>
          <li>
            <a href="./doubt.html">
              <i class="far fa-question-circle"></i>
              <p>Dúvida</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar -->
    
    <div class="main-panel" id="main-panel">
      <div class="background-fixo">
        <div class="texto-background">
          <img src="../assets/img/img2_background.png" alt="" srcset="">
          <p>A ciranda não tem <br>início, meio nem fim<br> mas um entrelaçamento<br>de pontos distribuídos.
            <br><br> Tem flexibilidade e<br> resiliência para resistir <br>as ações externas de <br>forma colaborativa.</p>
        </div>
      </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      //demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>