<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{asset("assets/lte/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("assets/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" )}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/lte/dist/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!--Inicio Header-->
      @include("theme/header")
      <!--Fin Header-->
      <!--Inicio Aside-->
      <!--Fin Aside-->
      <div class="content-wrapper bg-white">
        <div class="container" style="padding: 20px">
          @yield('contenido')
        </div>
      </div>
      <!-- Inicio footer-->
      <!-- Fin footer-->
    </div>
    <!-- jQuery -->
    <script src="{{asset("assets/lte/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("assets/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/lte/dist/js/adminlte.min.js")}}"></script>
    <script src="{{asset("assets/lte/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Para las Graficas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>  
  </body>
</html>