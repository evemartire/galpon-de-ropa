<!DOCTYPE html>
<!doctype html>
<html class="fuelux" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAD .::. Decreditos</title>
        @yield('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/bootstrap3/css/bootstrap.css') }}">
        <!--<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fontawesome/css/font-awesome.min.css') }}">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Theme Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/demo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/tables.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/buttons.css') }}">

        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/jquery-ui/jquery-ui.structure.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui-timepicker-addon.css') }}">

        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/png">
        <link rel="shortcut icon" type="image/png" href="{{ asset('/favicon.ico') }}" />
    </head>
    <body>
        <!-- Left Sidebar Start -->
        <div class="sidebar sidebar-left">
            <!-- Logo Start -->
            <div class="logo-container">
                <img src="{{ asset('/images/decreditos-logo.png') }}" class="img-responsive big" alt="Decreditos" title="Decreditos"/>
                <img src="{{ asset('/images/decreditos-logo-collapsed.png') }}" class="img-responsive small" alt="Decreditos" title="Decreditos"/>
            </div>
            <!-- Logo End -->
            <!-- User Profile Start -->
            @if( Auth::user())
            <div class="sidebar-user-profile">
                <div class="avatar">
                    @if(Auth::user()->Avatar && file_exists('images/usuarios/'.Auth::user()->Avatar)) 
                    {{ Html::image('/images/usuarios/'.Auth::user()->Avatar, Auth::user()->Nombre, array('width' => '75px', 'height' => '75px') ) }}
                    @else
                    {{ Html::image('/images/avatar.png', Auth::user()->Nombre, array('width' => '65px', 'height' => '65px') ) }}
                    @endif
                </div>
                <div class="ul-icons">
                    <span class="user-info">{{ Auth::user()->Nombre }} {{ Auth::user()->Apellido }}</span>
                    <ul class="icon-list">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i></a></li>

<!--                        <li><a href="/perfil"><i class="fa fa-cog"></i></a></li>-->
                    </ul>
                </div>
            </div>
            @endif
            <!-- User Profile End -->
            <!-- Menu Start -->
            <ul class="main-menu">
                <li><a href="#" class="sidebar-collapse"><i class="fa fa-eye-slash"></i><span>Ocultar Menú</span></a></li>

                <li>
                    <a href="/bienvenido">
                        <i class="fa fa-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="/baldes/tablero-de-control">
                        <i class="fa fa-gear"></i>
                        <span>Tablero de control</span>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="">
                        <i class="fa fa-fire-extinguisher"></i>
                        <span>Baldes</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/baldes/agencias">
                                <i class="fa fa-automobile"></i>
                                <span>Agencias</span>
                            </a>
                        </li>
                        <li>
                            <a href="/baldes/operaciones">
                                <i class="fa fa-usd"></i>
                                <span>Operaciones</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @if( Auth::user()->hasPermission('MIS_LLAMADOS'))
                <li class="has-submenu">
                    <a href="#">
                        <i class="fa fa-phone"></i>
                        <span>Llamados</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/mis-llamados">
                                <i class="fa fa-phone"></i>
                                <span>Mis Llamados</span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="/mis-llamados">
                                                        <i class="fa fa-phone"></i>
                                                        <span>Campañas Pendientes</span>
                                                    </a>
                                                </li>-->
                        <li>
                            <a href="/mis-llamados?Campania=2">
                                <i class="fa fa-check"></i>
                                <span>Validación Visita</span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="/llamados-consultas-pendientes">
                                                        <i class="fa fa-phone"></i>
                                                        <span>Consultas Pendientes</span>
                                                        <span class="hidden consultas-pendientes-id red-notification"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/llamados-aprobados-pendientes">
                                                        <i class="fa fa-phone"></i>
                                                        <span>Aprobados Pendientes</span>
                                                        <span class="aprobados-pendientes-id hidden red-notification"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/llamados-agencias-por-perder">
                                                        <i class="fa fa-phone"></i>
                                                        <span>Agencias por perder</span>
                                                        <span class="agencias-por-perder-id hidden red-notification"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/llamados-agencias-perdidas">
                                                        <i class="fa fa-phone"></i>
                                                        <span>Agencias perdidas</span>
                                                        <span class="agencias-perdidas-id hidden red-notification"></span>
                                                    </a>
                                                </li>-->
                    </ul>
                </li>
                @endif
                <li class="has-submenu">
                    <a href="#">
                        <i class="fa fa-line-chart"></i>
                        <span>Informes</span>
                    </a>
                    <ul class="submenu">
                        @if( Auth::user()->hasPermission('VER_REPORTE_SEMANAL'))
                        <li>
                            <a href="/reportes/semanal">
                                <i class="fa fa-line-chart"></i>Semanal
                            </a>
                        </li>
                        @endif
                        @if( Auth::user()->hasPermission('VER_REPORTE_MENSUAL'))
                        <li>
                            <a href="/reportes/mensual">
                                <i class="fa fa-line-chart"></i>Mensual
                            </a>
                        </li>
                        @endif
                        @if( Auth::user()->hasPermission('VER_REPORTE_TAREAS'))
                        <li>
                            <a href="/reportes/tareas/mensual">
                                <i class="fa fa-check"></i>Tareas
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->hasPermission('GESTORES_UBICACION'))
                        <li>
                            <a href="/reporte-gestores/ubicaciones">
                                <i class="fa fa-map-marker"></i>Gestor Ubicaciones
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>

                @if( Auth::user()->hasPermission('AGENCIAS_LISTAR') && Auth::user()->hasPermission('AGENCIAS_PUEDE_MODIFICAR_CAMPO_TIPO'))
                <li class="has-submenu">
                    <a href="/agencias">
                        <i class="fa fa-automobile"></i>
                        <span>Agencias</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/agencias">
                                <i class="fa fa-automobile"></i>
                                <span>Agencias</span>
                            </a>
                        </li>
                        @if( Auth::user()->hasPermission('AGENCIAS_PUEDE_MODIFICAR_CAMPO_TIPO'))
                        <li>
                            <a href="/agencias/pendientes-aprobacion">
                                <i class="fa fa-file-text"></i>
                                <span>Acuerdos comerciales</span> 
                                <span class="acuerdos-comerciales-id hidden red-notification"></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @elseif( Auth::user()->hasPermission('AGENCIAS_LISTAR'))
                <li>
                    <a href="/agencias">
                        <i class="fa fa-automobile"></i>
                        <span>Agencias</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('OPERACIONES_LISTAR'))
                <li>
                    <a href="/operaciones">
                        <i class="fa fa-usd"></i>
                        <span>Operaciones</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('GESTORES_LISTAR'))
                <li>
                    <a href="/gestores">
                        <i class="fa fa-users"></i>
                        <span>Gestores</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('USUARIOS_LISTAR'))
                <li>
                    <a href="/usuarios">
                        <i class="fa fa-user"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('ROLES_Y_PERMISOS_ADMINISTRAR'))
                <li>
                    <a href="/roles">
                        <i class="fa fa-check-square-o"></i>
                        <span>Roles y Permisos</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('SUCURSALES_LISTAR'))
                <li>
                    <a href="/sucursales">
                        <i class="fa fa-sitemap"></i>
                        <span>Sucursales</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('ADMINISTRAR_CAMPANIAS'))
                <li>
                    <a href="/campanias">
                        <i class="fa fa-bullhorn"></i>
                        <span>Campañas</span>
                    </a>
                </li>
                @endif
                @if( Auth::user()->hasPermission('ZONAS_LISTAR'))
                <li>
                    <a href="/zonas">
                        <i class="fa fa-map-marker"></i>
                        <span>Zonas y Sub Zonas</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="/usuarios/cambiar-password" target="_blank">
                        <i class="fa fa-key"></i>
                        <span>Cambiar mi contraseña</span>
                    </a>
                </li>
                <li>
                    <a href="http://s1.decreditos.com/" target="_blank">
                        <i class="fa fa-rss"></i>
                        <span>Ingreso al Sistema S1</span>
                    </a>
                </li>

                <!--                <li class="active has-submenu">
                                    <a href="#" class="close-child">
                                        <i class="fa fa-desktop"></i>
                                        <span>Resultados</span>
                                    </a>
                                    <ul class="submenu" style="display: block;">
                                        <li>
                                            <a href="index.html">Ciclo 1</a>
                                        </li>
                                        <li>
                                            <a href="index-fixed-sidebar.html">Ciclo 2</a>
                                        </li>
                                        <li>
                                            <a href="index-fixed-header.html">Causas principales</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#"><i class="fa fa-support"></i><span>Planes de Acci&oacute;n</span></a>
                                    <ul class="submenu">
                                        <li><a href="support.html">Support Archive</a></li>
                                        <li><a href="ticket.html">Ticket Reply</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="fa fa-windows"></i>
                                        <span>Ranking de tiendas</span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="404.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="500.html">500 Error</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="forgotten-password.html">Forgotten Password</a>
                                        </li>
                                        <li>
                                            <a href="blank.html">Blank Page</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">Profile Page</a>
                                        </li>
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">Grid Example</a>
                                        </li>
                                    </ul>
                                </li>-->
            </ul>	
            <!-- Menu End -->
            <div class="inner">
                <!--                 Separator -->
                <!--                <div class="separator"></div>-->
                <ul class="list">
                    <!--                    <li>
                                            <div class="progress-bar-container">
                                                <span>Tareas asignadas</span>
                                                <div class="progress-bar">
                                                    <div class="progress blue"></div>
                                                </div>
                                                <span>60% Complete</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progress-bar-container">
                                                <span>Planes de acci&oacute;n</span>
                                                <div class="progress-bar">
                                                    <div class="progress orange"></div>
                                                </div>
                                                <span>60% Complete</span>
                                            </div>
                                        </li>-->
                </ul>
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Top Content Bar Start -->
        <div class="top-bar" style="height:0px;">
            <div class="main-container">
                <div class="container">
                    <!--<div class="row">
                        <div class="col-sm-12 text-right">
                            <ul class="left-icons icon-list">
                                <li><a href="#"><i class="fa fa-bell"></i></a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Top Content Bar End -->
        @yield('content')
        <!-- Scripts -->
        <script src="{{ asset('/assets/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/bootstrap3/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/sidebar.min-height.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/all-pages.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/jquery-ui-timepicker-addon.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/validator/jquery.validate.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/validator/localization/messages_es_AR.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/custom-validate.js') }}" type="text/javascript"></script>
        @yield('js')
    </body>
</html>