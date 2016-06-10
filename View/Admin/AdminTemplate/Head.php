<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Cuerda - Admin</title>

        <link rel="shortcut icon" href="View/Pagina/Front/images/favicon.ico">
        <!-- Bootstrap core CSS -->
        <link href="View/Admin/Plugins/css/bootstrap.min.css" rel="stylesheet">
        <link href="View/Admin/Plugins/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="View/Admin/Plugins/css/animate.min.css" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="View/Admin/Plugins/css/custom.css" rel="stylesheet">

        <link href="View/Admin/Plugins/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="View/Admin/Plugins/css/icheck/square/square.css" rel="stylesheet" />
        <link href="View/Admin/Plugins/css/floatexamples.css" rel="stylesheet" type="text/css" />
        <link href="View/Admin/Plugins/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

        <script src="View/Admin/Plugins/js/jquery.min.js"></script>
        <script src="View/Admin/Plugins/js/nprogress.js"></script>
        <!--datatable-->
        <script src="View/Admin/Plugins/js/datatable/media/css/dataTables.bootstrap.js"></script>    
        <script src="View/Admin/Plugins/js/datatable/media/js/jquery.dataTables.js"></script>
        <script src="View/Admin/Plugins/js/datatable/media/js/dataTables.bootstrap.js"></script>    
        <script>
            NProgress.start();
        </script>

    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title">
                                <img src="Img/Logo.png" style="width: 150px; margin-left: 15%;" class="img-responsive" alt="Placeholder image">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3></h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="index.php?Controller=AdminController&Action=index"><i class="fa fa-home"></i> Home </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-th"></i> Producto <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.php?Controller=ProductoController&Action=ingresar">Ingresar</a>
                                            </li>
                                            <li>
                                                <a href="index.php?Controller=ProductoController&Action=buscar">Buscar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-user"></i> Usuario <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.php?Controller=UsuarioController&Action=ingresar">Ingresar</a>
                                            </li>
                                            <li>
                                                <a href="index.php?Controller=UsuarioController&Action=listar">Listar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-filter"></i> Tipo de Producto <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.php?Controller=TipoController&Action=listar">Listar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-shield"></i> Marca <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.php?Controller=MarcaController&Action=ingresar">Ingresar</a>
                                            </li>
                                            <li>
                                                <a href="index.php?Controller=MarcaController&Action=listar">Listar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-sitemap"></i> Pagina <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li>
                                                <a href="index.php?Controller=HomeController&Action=ingresar">Home</a>
                                            </li>
                                            <li>
                                                <a href="index.php?Controller=HomeController&Action=ingresarOferta">Oferta</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.php?Controller=AdminController&Action=calendar"><i class="fa fa-calendar"></i>Calendario</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- /sidebar menu -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="Img/Users/<?php echo $_SESSION['usuario'][0]['Imagen']; ?>" alt=""><?php echo $_SESSION['usuario'][0]['Nombre']; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="index.php?Controller=LoginController&Action=salir"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">