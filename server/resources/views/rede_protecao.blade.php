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
        <a href="/dashboard" class="simple-text logo-normal">
          <img src="../assets/img/logo.png" alt="" srcset="">
        </a>
        <i class="fas fa-bars " style="float: right; align-self: center; "></i>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="/login">
              <i class="fas fa-chalkboard"></i>
              <p>Cadastrar Relato</p>
            </a>
          </li>
          <li class="active ">
            <a href="./rede_protecao.html">
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
            <a href="/about">
              <i class="now-ui-icons users_single-02"></i>
              <p>Sobre</p>
            </a>
          </li>
          <li>
            <a href="/doubt">
              <i class="far fa-question-circle"></i>
              <p>Dúvida</p>
            </a>
          </li>
        </ul>
      </div>
    </div>




    <!-- Sidebar -->
    
    <div class="main-panel texto-background-about " id="main-panel">
        <h3> <img class="marcador" src="../assets/img/marcador.png" alt="" srcset="">O que é uma rede de proteção social? </h3>
        <p class="paragrafo">Rede de Proteção Social é uma articulação de pessoas, organizações e instituições, uma aliança estratégica de enfrentamento de questões sociais. Baseia-se na organização colaborativa, na cooperação mútua e na divisão de responsabilidades com o objetivo de compartilhar projetos e causas comuns de modo democrático e solidário. A Norma Operacional Básica (NOB)/2005, do Sistema Único da Assistência Social, descreve a Rede Socioassistencial como sendo “um conjunto integrado de ações de iniciativa pública e da sociedade que oferta e opera benefícios, serviços, programas e projetos, o que supõe a articulação entre todas essas unidades de provisão de proteção social, sob a hierarquia básica e especial e ainda por níveis de complexidade.
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
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>