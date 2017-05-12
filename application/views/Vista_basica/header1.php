<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content=""><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo $titulo; ?></title>

  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<!--<link href="<?php echo base_url() ; ?>assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url() ; ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  
  <link href="<?php echo base_url() ; ?>assets/css/carousel.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/css/vistaSesion.css" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/css/font-awesome.min.css">

</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:black;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white;">Salón de Eventos Zafiro</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="<?php if ($titulo=="Zafiro"){echo "active";}?>"><a style="color:white;" href="<?php echo base_url() ; ?>"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
            <li  class=""><a style="color:white;" href="<?php echo base_url() ; ?>Sesion/cerrar_sesion"><i class="fa fa-sign-in" aria-hidden="true"></i>Cerrar Sesion</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->

<!--<body>
  <script type="text/javascript" src="http://localhost/Project_PSL/assets/js/materialize.min.js"></script>
  <script href="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <div class="container">
    
    
    <nav>
      <div class= "#1a237e blue nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?php //echo base_url().'index.php/Welcome/Inicio' ?> ">Inicio</a></li>
          <li><a href="<?php //echo base_url().'index.php/Sesion/iniciarSesion' ?> ">Iniciar Sesión</a></li>
          <li><a href="<?php //echo base_url().'index.php/Registro/registrarUsuario' ?> ">Registrarse</a></li>
          <li><a href="collapsible.html">Cátalogo</a></li>
        </ul>
      </div>
    </nav>
-->