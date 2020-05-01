<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo','Administrador')</title>
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
    @include("themeadministrador/header")
    <!--Fin Header-->
    <!--Inicio Aside-->
    @include("themeadministrador/aside")
    <!--Fin Aside-->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-md-12">
              <h1 style="color: green; text-align:center;">MODULO ADMINISTRATIVO</h1>
            </div>
            <div class="col-md-12">
              @yield('busqueda')
            </div>
          </div>
        </div>
      </section>
      <section>

      </section>

      <div class="container">
        @yield('contenido')
      </div>

    </div>
    <!-- Inicio footer-->
    @include("themeadministrador/footer")
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
  <!-- DataTable -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#datos').DataTable( {
      responsive: true,
      dom: 'Bfrtip',
        buttons: [{
          text: '<button class="btn btn-warning btn-sm">Exportar a Excel <i class="fas fa-file-excel"></i></button>',
              titleAttr: 'Excel',
              extend: 'excelHtml5',
              customize: function( xlsx ) {
                var sheet = xlsx.xl.worksheets['Vista1.xml'];
                $(sheet).attr( 's', '2' );
              }
            },
            {
        extend: 'pdf',
        footer: true,
        title: 'Archivo PDF',
        filename: 'Export_File_pdf',
        text: '<button class="btn btn-danger btn-sm">Exportar a PDF <i class="far fa-file-pdf"></i></button>'
      }
            
        ],
        "language": {
              "search":"Buscar",
              "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
              },
              "zeroRecords": "No se encuentrar Registros - Lo siento",
              "info": "Total  _PAGE_ de Paginas",
              "infoEmpty": "No hay registros disponibles.",
              "infoFiltered": "(Filtrado  _MAX_ total de los registros)",
        },
        
    } );
} );
  </script>

</body>

</html>