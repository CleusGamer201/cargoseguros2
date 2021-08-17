<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
        <title>CargoSeguros | Historial</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Panel Administrativo</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Perfíl</a></li>
                        <li><a class="dropdown-item" href="#!">Configuracón</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}</a></li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                                       
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Nucleo</div>
                            <a class="nav-link" href="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel
                            </a>
                            <div class="sb-sidenav-menu-heading">Respaldos</div>
                            <a class="nav-link" href="listado">
                                <div class="fas fa-boo"><i class="fas fa-table"></i></div>
                                Listado de PDF
                            </a>
                            <a class="nav-link" href="historial">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Historial
                            </a> 
                            <a class="nav-link" href="usuarios">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Listado de Usuario
                            </a>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Business Intelligence
                            </a>                                                                                     
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Sitio web desarrollado por:</div>
                        CargoSeguros
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Historial de Borrados</h1>          
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Tus Respaldos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Actualizado hace 5 minutos.</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Respaldos Generados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Actualizado hace 5 minutos.</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Tus ventas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Se actualiza cada 1 minuto.</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Ventas Mensuales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">se actualiza cada 1 minuto.</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Respaldos Borrados <strong>(No Permanente)</strong>.
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre y Apellido</th>
                                            <th>Salida</th>
                                            <th>Destino</th>
                                            <th>Empresa</th>
                                            <th>Respaldo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre y Apellido</th>
                                            <th>Salida</th>
                                            <th>Destino</th>
                                            <th>Empresa</th>
                                            <th>Respaldo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($backs as $back)
                                            <tr>
                                                <td>{{ $back->getConsecutivoFormatted() }}</td>
                                                <td>{{ $back->user_generator }}</td>
                                                <td>{{ $back->exit_departament }}</td>
                                                <td>{{ $back->arrival_departament }}</td>
                                                <td>{{ $back->findBusiness()->name }}</td>
                                                <td>${{number_format($back->total, 0, ",", ".")}} COP</td>
                                                <td>
                                                <form action="{{ route('forceDeleteRespalde') }}" method="GET">
                                                    <input name="backId" style="display:none;" type="text" value="{{ $back->id }}">
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar Permanente</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CargoSeguros 2021</div>
                            <div>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>

