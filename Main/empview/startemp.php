<?php
	require ('..\util\isLoggedEmp.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Proveneet</title>
    <!-- Icon -->
	<link rel="icon" type="image/png" href="../img/logo.png"/>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

    <body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
    <li class="nav-header">
    <div class="dropdown profile-element">
    <!-- Image (always default) -->
    
    <img alt="image" class="rounded-circle" src="../img/pfp_small.jpg"/>
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
    <!-- Placeholder name and last name -->
    
    <span class="block m-t-xs font-bold" id="fullname"></span>
    
    <!-- Placeholder role (admin or employee) -->
    <span class="text-muted text-xs block">Empleado <b class="caret"></b></span>
    </a>
    <ul class="dropdown-menu animated fadeInRight m-t-xs">
    <li><a class="dropdown-item" href="profemp.php">Información personal</a></li>
    <li class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="../util/logout.php">Salir</a></li>
    </ul>
    </div> <!-- div from dropdown -->
    
    <div class="logo-element">P</div>
    </li>
    <li>
    <a href="profemp.php"><i class="fa fa-address-book-o"></i> <span class="nav-label">Gestión de perfil</span></a>                
    </li>
    <li>
    <a href="providers.php"><i class="fa fa-users"></i> <span class="nav-label">Proveedores</span></a>
    </li>

<li>
    <a href="manageproducts.php"><i class="fa fa-dropbox"></i> <span
            class="nav-label">Gestión de productos</span></a>
</li>
<li>
                    <a href="catalog.php"><i class="fa fa-shopping-cart"></i> <span
                                class="nav-label">Realizar compra</span></a>
                    </li>

                    <li>
                        <a href="pendingorders.php"><i class="fa fa-shopping-bag"></i> <span class="nav-label">Gestión de ordenes de compra</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="pendingorders.php">Pendientes</a></li>
                            <li><a href="processedorders.php">Procesadas</a></li>
                        </ul>
                    </li>
    </div> <!-- div from sidebar collapse -->
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div> <!-- div from navbar header -->
    <ul class="nav navbar-top-links navbar-right">
    <li style="padding: 20px">
    <span class="m-r-sm text-muted welcome-message">Bienvenido a Proveneet</span>
    </li>
    <li>
    <a href="startemp.php">
    <i class="fa fa-question-circle-o"></i> Ayuda</a>
    </li>
    <li>
    <a href="../util/logout.php">
    <i class="fa fa-sign-out"></i> Salir</a>
    </li>
    </ul>
    </nav>
    </div> <!-- div from row border bottom -->


    <div class="ibox ">


    <div class="ibox-content no-padding">
    <ul class="list-group">

    <!-- FAQ TITLE -->
    <div class="container">
    <div class="row m-b-lg">
    <div class="col-lg-12 text-center">
    <div class="navy-line"></div>
    <h1>Bienvenido</h1>
    <p>En ésta sección podrá obtener una guía rápida acerca de Proveneet. Haga clic sobre cada pregunta para visualizar la respuesta</p>
    </div> <!-- div from col lg-12 -->
    </div> <!-- div from navy line -->

   <!-- ITEMS -->
    <div class="faq-item">
    <div class="row">
    <div class="col-md-7">
    <a data-toggle="collapse" href="#faq1" class="faq-question">¿Qué es Proveneet?</a>
    <small>Tipo: <strong>General</strong></small>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div id="faq1" class="panel-collapse collapse ">
    <div class="faq-answer">
    <p>
       Es un aplicativo que permite ubicar el proveedor con las mejores
        condiciones de venta de articulos de construcción.
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="faq-item">
    <div class="row">
    <div class="col-md-7">
    <a data-toggle="collapse" href="#faq3" class="faq-question">¿Cómo agrego un nuevo proveedor?</a>
    <small>Tipo: <strong>Funciones</strong></small>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div id="faq3" class="panel-collapse collapse ">
    <div class="faq-answer">
    <p>
        Diríjase a "Proveedores" en el menú de la izquierda, cliqueelo y en la
        parte inferior de la tabla de proveedores presione "agregar" y rellene los datos correspondientes.
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="faq-item">
    <div class="row">
    <div class="col-md-7">
    <a data-toggle="collapse" href="#faq4" class="faq-question">¿Cómo modifico mi contraseña?</a>
    <small>Tipo: <strong>Funciones</strong></small>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div id="faq4" class="panel-collapse collapse ">
    <div class="faq-answer">
    <p>
        Dirigéndose a "Ajustes de usuario" en el menú de la izquierda, seleccionando
        "Gestión de perfil" en el menú desplegable y cliqueando el botón de "cambiar contraseña"
            </p>
            </div>
            </div>
            </div>
            </div>
            </div>
    
            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq5" class="faq-question">¿Cómo agrego un
                                            nuevo producto?</a>
                                        <small>Tipo: <strong>Funciones</strong></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq5" class="panel-collapse collapse ">
                                            <div class="faq-answer">
                                                <p>
                                                    Diríjase a "Gestion de productos" en el menú de la izquierda, cliqueelo y en
                                                    la
                                                    parte superior de la tabla de productos presione "Agregar producto" y
                                                    rellene los datos correspondientes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq6" class="faq-question">¿Cómo realizo una
                                            orden de compra?</a>
                                        <small>Tipo: <strong>Funciones</strong></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq6" class="panel-collapse collapse ">
                                            <div class="faq-answer">
                                                <p>
                                                    Diríjase a "Realizar compra" en el menú de la izquierda, cliqueelo 
                                                    y seleccione el producto que desea, verificando el precio y el proveedor
                                                    que ofrece dicho producto, luego debe cliquear el boton "Generar orden
                                                    de compra y rellene el campo con la cantidad que desea."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq7" class="faq-question">¿Cómo cambio una orden de compra
                                            de pendiente a ejecutada?</a>
                                        <small>Tipo: <strong>Funciones</strong></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq7" class="panel-collapse collapse ">
                                            <div class="faq-answer">
                                                <p>
                                                    Diríjase a "Gestion ordenes de compra" en el menú de la izquierda, cliqueelo y
                                                    seleccione la opcion "Pendientes", busque la orden de compra que desea cambiar a ejecutada
                                                    y en la parte derecha de la tabla seleccione la opcion modificar. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

    
    <!-- FOOTER -->
    <div class="row">
    <div class="col-lg-12 text-center m-t-lg m-b-lg">
    <p><strong>&copy; 2019 Provennet</strong></p>
    </div> <!-- div from row -->
    </div> <!-- div from col-lg-12 -->
    </div> <!-- div from row m-b -->
    </div> <!-- div from container -->

    </ul>
    </div><!-- ibox content-->
    </div><!-- div from ibox -->
    

    </div><!-- div from page wrapper -->
    </div><!-- div from wrapper(superior) -->


    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../js/plugins/flot/jquery.flot.js"></script>
    <script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="../js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="../js/plugins/toastr/toastr.min.js"></script>

    <script type="text/javascript">
    /*Fetch values from login*/
    var ln = <?php echo json_encode($value2); ?>;
    var n = <?php echo json_encode($value); ?>;
    
    /*Assign login data*/
    document.getElementById("fullname").innerHTML = n[0]+" "+ln[0];

    </script>
	
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.8/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Aug 2018 01:28:16 GMT -->
</html>
