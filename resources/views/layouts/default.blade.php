<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ page_title($title ?? '') }} - SnoopyForm</title>

            
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Overhide style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        
        @yield('content')


        
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        
        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{asset{('plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}"></script>
        <script src="{{ asset('js/form.js')}}"></script>
        <script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('datatables/dataTables-demo.js')}}"></script>
    
        <script type="text/javascript">
          $(document).ready(function() {
              $('#etat').DataTable({
                  searching: true,
                  autoWidth: true,
                  deferRender: true, 
                  info: false, 
                  lengthChange: false, 
                  ordering: false, 
                   paging: false,
                   scrollX: false, 
                    scrollY: false,  
                  "language": {
          "lengthMenu": "Afficher _MENU_ ",
          searchPlaceholder: "Recherche",
          "sSearch": " "
        },
              });
  
  
              $('#document').DataTable({
                  searching: true,
                  autoWidth: true,
                  deferRender: true, 
                  info: false, 
                  lengthChange: false, 
                  ordering: false, 
                   paging: false,
                  "language": {
          "lengthMenu": "Afficher _MENU_ ",
          searchPlaceholder: "Recherche",
          "sSearch": " "
        },
              });
  
  
  
  
  
              $('#coutumier_table2').DataTable({
                  searching: true,
                  autoWidth: true,
                  deferRender: true, 
                  info: false, 
                  lengthChange: false, 
                  ordering: false, 
                   paging: false,
                  "language": {
          "lengthMenu": "Afficher _MENU_ ",
          searchPlaceholder: "Recherche",
          "sSearch": " "
        },
              });
  
  
  
              $('#agents').DataTable({
                  searching: true,
                  autoWidth: true,
                  deferRender: true, 
                  info: false, 
                  lengthChange: false, 
                  ordering: false, 
                   paging: false,
                  "language": {
          "lengthMenu": "Afficher _MENU_ ",
          searchPlaceholder: "Recherche",
          "sSearch": " "
        },
              });
  
  
              $('#admin').DataTable({
                  searching: true,
                  autoWidth: true,
                  deferRender: true, 
                  info: false, 
                  lengthChange: false, 
                  ordering: false, 
                   paging: false,
                  "language": {
          "lengthMenu": "Afficher _MENU_ ",
          searchPlaceholder: "Recherche",
          "sSearch": " "
        },
              });
  
          })
      </script>
    </body>
</html>
        