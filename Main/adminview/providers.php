<?php
    require ('..\util\isLoggedAdm.php');
	require ('..\dbProv\fillProvidersTable.php');
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

    <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
    <span class="text-muted text-xs block">Administrador <b class="caret"></b></span>
    </a>
    <ul class="dropdown-menu animated fadeInRight m-t-xs">
    <li><a class="dropdown-item" href="profile.php">Información personal</a></li>
    <li class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="../util/logout.php">Salir</a></li>
    </ul>
    </div> <!-- div from dropdown -->
    
    <div class="logo-element">P</div>
    </li>
    <li>
    <a href="profile.php"><i class="fa fa-address-book-o"></i> <span class="nav-label">Ajustes de usuario</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
    <li><a href="profile.php">Gestión de perfil</a></li>
    <li><a href="manageusers.php">Gestión de usuarios</a></li>   
    </ul>                
    </li>
    <li class="active">
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
<a href="index.html">
<i class="fa fa-question-circle-o"></i> Ayuda</a>
</li>
<li>
<a href="../util/logout.php">
<i class="fa fa-sign-out"></i> Salir</a>
</li>
</ul>
</nav>
</div> <!-- div from row border bottom -->



<!-- TABLE -->
<div class="ibox ">
<div class="ibox-title">
<h5>Proveedores</h5>
</div>

<div class="row">

<div class="col-lg-12">
<div class="ibox ">
<div class="ibox-title">
<div class="col-xs-2 p-1 bd-highlight">
    <a data-toggle="modal" class="btn btn-primary btn-lg" id="add"
    href="#add-provider"><i class="fa fa-plus-circle"></i> Agregar proveedor</a>
    </div>
    <ul class="list-group">

        <div class="table-responsive">
        <table class="footable table table-stripped toggle-arrow-tiny dataTables-example" id="providers" >
        <thead>
        <tr>
            <th data-toggle="true">Nombre</th>
            <th data-hide="phone,tablet">Dirección</th>
            <th data-hide="phone,tablet">Teléfono</th>
            <th data-hide="phone,tablet">RIF</th>
            <th data-sort-ignore="true">Acción</th>
            </tr>
            </thead>
                        
            <tbody>
            <?php while($row1 = mysqli_fetch_array($result3)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td>
                <div class="btn-group">
                    <button class="btn btn-info btn btn-xs" id="modify" onclick="getSelectedRow();">Modificar</button>
                    <button class="btn btn-danger btn btn-xs" id="delete" onclick="getTarget();">Eliminar</button>
                </div>
                </td>
            </tr>
            <?php endwhile; mysqli_close($conn);?>
            </tfoot>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>

    <!-- FORM ADD -->
    <div id="add-provider" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-body">
    <div class="row">
    <div class="col-sm-12"><h3 class="m-t-none m-b">Agregar nuevo proveedor</h3>
    <form role="form">
    <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="name"></div>
    <div class="form-group"><label>Dirección</label> <input type="text" placeholder="Dirección" class="form-control" id="dir"></div>
    <div class="form-group"><label>Teléfono</label> <input type="text" placeholder="Teléfono" class="form-control" id="phone"></div>
    <div class="form-group"><label>RIF</label> <input type="text" placeholder="RIF" class="form-control" id="rif"></div>
    
    <!-- SUBMIT -->
    <button class="btn btn-primary btn-lg float-right ml-2">Cancelar</button>
    <button class="btn btn-primary btn-lg float-right" type="button" id="addpro">Aceptar</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <!-- FORM MODIFY -->
    <div id="modify-provider" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-body">
    <div class="row">
    <div class="col-sm-12"><h3 class="m-t-none m-b">Modificar proveedor</h3>
    <form role="form">
    <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="mname"></div>
    <div class="form-group"><label>Dirección</label> <input type="text" placeholder="Dirección" class="form-control" id="mdir"></div>
    <div class="form-group"><label>Teléfono</label> <input type="text" placeholder="Teléfono" class="form-control" id="mphone"></div>
    <div class="form-group"><label>RIF</label> <input type="text" placeholder="RIF" class="form-control" id="mrif"></div>
    
    <!-- SUBMIT -->
    <button class="btn btn-primary btn-lg float-right ml-2">Cancelar</button>
    <button class="btn btn-primary btn-lg float-right" type="button" id="modifyprov">Aceptar</button>

    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </ul>
        </div><!-- ibox content-->
    </div><!-- div from ibox -->


    </div><!-- div from page wrapper -->
    </div><!-- div from wrapper(superior) -->
    </div>
    </div>


<!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../js/plugins/dataTables/datatables.min.js"></script>
<script src="../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

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

<!-- Utilities -->
<script src="../util/datatable.js"></script>
<script src="../dbProv/addproverif.js"></script>
<script src="../dbProv/modproverif.js"></script>
<script src="../dbProv/delprov.js"></script>

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
