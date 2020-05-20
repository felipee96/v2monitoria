<!doctype html>
<html lang="es">

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Reporte falla</title>
</head>
<div style="width:80%; display: block; margin-left: auto; margin-right: auto; color: white;">
    <a class="nav-link" href="/modAdministrador"><i class="fas fa-home" style="color: orange"> Regresar</i></a>

    <body style="background-image: url(../imagenes/fondo.jpeg);
	background-size: cover;">
        <div style="margin-top: 30px;">
            <h1 class="text-center">REPORTE FALLA</h1>
        </div>

        <table id="example" class="table table-striped table-bordered" style="background: white;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Monitor</th>
                    <th scope="col">Sede</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col">Fecha Actualizacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach (verFalla() as $row)
                <tr>
                    <th scope="row">{{$row->id }}</th>
                    <td>{{$row->monitor }}</td>
                    <td>{{$row->id_sede }}</td>
                    <td>{{$row->sala }}</td>
                    <td>{{$row->equipo }}</td>
                    <td>{{$row->descripcion }}</td>
                    <td>{{$row->estado }}</td>
                    <td>{{$row->created_at }}</td>
                    <td>{{$row->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function() {
            $('#example').DataTable( {
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    {
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
                ]
            } );
        } );
        </script>
    </body>
</div>

</html>