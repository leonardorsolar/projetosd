<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SCGP | CPT</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tasks" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Ajuda</a>
      </li>
                   
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 <i class="fa fa-sign-out "></i> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container - cor do menu .sidebar-dark-primary admin.mim.css 11-->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="tasks" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CURSOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/logo-cursos-cpt.png"  alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Simple link -->
          <li class="nav-item">
            <a href="https://www.cpt.com.br/" target="_blank" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                www.cpt.com.br
                <span class="right badge badge-danger">Novos cursos</span>
              </p>
            </a>
          </li>
          <!-- /.Simple link -->

          <!-- menu link azul-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Unidade 1 - Criatividade
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

              <!-- menu link título-->
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-file-text nav-icon"></i>
                    <p>Criatividade</p><br>
                    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp- A força da criatividade</p>
                    <br>
                    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp- Ser criativo</p>
                  </a>
              </li>
               <!-- menu link título-->
               <!-- / .menu link título-->
              </ul>
               <!-- / .menu link título-->
          </li>
          <!-- /.Menu link azul -->


          <!-- menu link azul-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Unidade 2 - Título 2
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

          </li>
          <!-- /.Menu link azul -->




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content">
    @yield('content')
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  
      <div class="p-1">
        <h5>Procedimentos</h5>
        <hr class="mb-1">
        <p>Segunda-feira</p>
        <h6>Fazer o planejamento semanal</h6>
        <hr class="mb-1">
      </div>
      <div class="p-1">
      <p>Terça-feira</p>
        <h6>Replanejar a sprint</h6>
      </div>
    </aside>
    <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="<?php echo asset('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="<?php echo asset('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?php echo asset('dist/js/adminlte.min.js')?>"></script>
</body>
</html>
