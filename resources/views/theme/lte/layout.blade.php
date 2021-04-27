<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('Titulo', 'Biblioteca') | Tutoriales virtuales</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
  <!-- Bootstrap 4 -->
  <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
  <script src="{{asset("assets/js/funciones.js")}}"></script>
  @yield('Estilos')
  @yield('Scripts')
</head>
<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio Header -->
        @include("theme/$theme/header")
        <!-- Fin Header -->
        <!-- Inicio Aside -->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
               <!-- Default box -->
            <div class="card">  
             @yield('Contenido')            
            </div>
              <!-- /.card -->         
            </section> 
        </div>
        <!-- Inicio Footer -->
        @include("theme/$theme/footer")
          <!-- Fin Footer -->
    </div>
</body>
</html>
