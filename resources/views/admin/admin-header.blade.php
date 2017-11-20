<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Sintracolpen - Admin</title>
        <meta name="description" content="Sintracolpen - Admin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <link rel="shortcut icon" href="{{ asset('imgAdmin/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('cssAdmin/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('cssAdmin/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('cssAdmin/main.css') }}">
        <link rel="stylesheet" href="{{ asset('cssAdmin/themes.css') }}">
        <script src="{{ asset('jsAdmin/vendor/modernizr-3.3.1.min.js') }}"></script>
    </head>
        <body>
        <div id="page-wrapper" class="page-loading">
            <div class="preloader">
                <div class="inner">
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
           
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <div id="sidebar">
                    <div id="sidebar-brand" class="themed-background">
                        <a href="#" class="sidebar-title">
                            <i class="fa fa-tachometer"></i><span class="sidebar-nav-mini-hide"><strong>SINTRACOLPEN</strong></span>
                        </a>
                    </div>

                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="admin-inicio.html">
                                        <i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Inicio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-nosotros.html">
                                        <i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Nosotros</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-child sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Afiliaciones</span></a>
                                    <ul>
                                        <li><a href="admin-afiliate-ya.html">Afiliate ya!</a></li>
                                        <li><a href="admin-nuestros-afiliados.html">Nuestros afiliados</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-folder-open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Contenidos</span></a>
                                    <ul>
                                        <li><a href="admin-boletines-generales.html">Boletines Generales</a></li>
                                        <li><a href="admin-comunicados-oficiales.html">Comunicados Oficiales</a></li>
                                        <li><a href="admin-contenidos-sindicales.html">Contenidos Sindicales</a></li>
                                        <li><a href="admin-documentos-oficiales.html">Documentos Oficiales</a></li>
                                        <li><a href="admin-capacitaciones.html">Capacitaciones</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-play sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Multimedia</span></a>
                                    <ul>
                                        <li><a href="admin-galeria.html">Galería</a></li>
                                        <li><a href="admin-videos.html">Videos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="admin-enlaces-interes.html">
                                        <i class="fa fa-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Enlaces de interés</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-preguntas-frecuentes.html">
                                        <i class="fa fa-question sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Preguntas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-contactanos.html">
                                        <i class="fa fa-phone sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Contáctanos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 20px">
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </header>