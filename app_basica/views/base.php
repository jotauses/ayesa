<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo STATIC_URL; ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo STATIC_URL; ?>/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php emptyblock('title') ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <!--   Fonts and icons   -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <!--   CSS Files   -->
    <link href="<?php echo STATIC_URL; ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo STATIC_URL; ?>/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo STATIC_URL; ?>/img/sidebar-5.jpg">
            <!-- data-color="purple | blue | green | orange | red" -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        APP Coches
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="">
                            <i class="nc-icon nc-delivery-fast"></i>
                            <p>Coches</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <?php emptyblock('main_title') ?> </a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">3</span>
                                    <span class="d-lg-none">Notificaciones</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notificaci&oacute;n 1</a>
                                    <a class="dropdown-item" href="#">Notificaci&oacute;n 2</a>
                                    <a class="dropdown-item" href="#">Notificaci&oacute;n 3</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Buscar</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Mi perfil</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Opci&oacute;n 1</a>
                                    <a class="dropdown-item" href="#">Opci&oacute;n 2</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Opci&oacute;n 3</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon">Cerrar sesi&oacute;n</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <div class="content">
                <div class="container-fluid">
                	<?php emptyblock('content') ?>
                </div>
            </div>
            
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Coches
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Compa&ntilde;&iacute;a
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://twitter.com/jotaxtr">Joaqu&iacute;n V&aacute;zquez</a>, Formaci&oacute;n Ayesa
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="<?php echo STATIC_URL; ?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo STATIC_URL; ?>/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo STATIC_URL; ?>/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--   JS Light Bootstrap   -->
<script src="<?php echo STATIC_URL; ?>/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>