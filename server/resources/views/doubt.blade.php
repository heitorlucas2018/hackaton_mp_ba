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
        <li>
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
          <li>
            <a href="/rede_protecao">
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
          <li class="active">
            <a href="/doubt">
              <i class="far fa-question-circle"></i>
              <p>Dúvida</p>
            </a>
         </li>  
    </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar -->
    
    <div class="main-panel texto-background-doubt " id="main-panel">
          <h3> <img class="marcador" src="../assets/img/marcador.png" alt="" srcset="">Dúvidas</h3>

          <h5>O que fazer, se eu visualizar um caso de agressão</h5>
          <p class="paragrafo">O projeto CIRANDA surge para suprir a necessidade de formalização da rede de proteção social da cidade, através de um modelo colaborativo, capaz de detectar os locais de maior demanda, além de um leque das possibilidades de respostas disponíveis. Através da CIRANDA buscamos contribuir para o fortalecimento, comunicação e agilidade no encaminhamento das diversas demandas sociais transversais a temática da infância e adolescência.<br>
            A CIRANDA é  uma ferramenta que entrega duas possibilidades de uso, interligadas e complementares.
          
          <h5>O que fazer, se eu visualizar um caso de agressão</h5>
          <p class="paragrafo">O projeto CIRANDA surge para suprir a necessidade de formalização da rede de proteção social da cidade, através de um modelo colaborativo, capaz de detectar os locais de maior demanda, além de um leque das possibilidades de respostas disponíveis. Através da CIRANDA buscamos contribuir para o fortalecimento, comunicação e agilidade no encaminhamento das diversas demandas sociais transversais a temática da infância e adolescência.<br>
            A CIRANDA é  uma ferramenta que entrega duas possibilidades de uso, interligadas e complementares.
          
          <h5>O que fazer, se eu visualizar um caso de agressão</h5>
          <p class="paragrafo">O projeto CIRANDA surge para suprir a necessidade de formalização da rede de proteção social da cidade, através de um modelo colaborativo, capaz de detectar os locais de maior demanda, além de um leque das possibilidades de respostas disponíveis. Através da CIRANDA buscamos contribuir para o fortalecimento, comunicação e agilidade no encaminhamento das diversas demandas sociais transversais a temática da infância e adolescência.<br>
            A CIRANDA é  uma ferramenta que entrega duas possibilidades de uso, interligadas e complementares.
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