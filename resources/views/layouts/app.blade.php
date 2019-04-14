
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fortics - Teste Fullstack</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
      //GLOBALIZANDO URL
  var project_survey = ':3000/';
  domin  =  window.location.protocol + "//" + window.location.hostname;
  var domain_complet = domin + project_survey; 
  var url = window.location.origin;

 </script>
  </head>
  <body class="app sidebar-mini rtl">
  <div  id="app">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">FORTICS</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" 
      data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>

    @section('sidebar')
        @include('layouts.sidebar')
    @show

    @yield('content')

  </div>
<script src="{{url('js/app.js')}}"></script>
    <!-- Essential javascripts for application to work-->
<script src="{{url('js/main.js')}}"></script>
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>
   
  </body>
</html>