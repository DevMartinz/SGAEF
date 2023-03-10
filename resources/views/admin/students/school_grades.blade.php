<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>|SGAEF| - Nota Escolar</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('login') }}">SGAEF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Boletim Acad??mico</div>
                            <a class="nav-link" href="index.html" style="color:white;">
                                <div class="sb-nav-link-icon" ><i class="fas fa-tachometer-alt"></i></div>
                                Visualizar Notas
                            </a>
                            <div class="sb-sidenav-menu-heading">Lista de Presen??a</div>
                            <a class="nav-link" href="{{ route('students.missing_school') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Exibir Faltas
                            </a>
                            <div class="sb-sidenav-menu-heading">Hist??rico Escolar</div>
                            <a class="nav-link" href="{{ asset('assets/Hist??rico_Escolar.pdf') }}" download>
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Baixar Documento
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        SGAEF
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Bruno Martins Alves</h1>
                        <ol class="breadcrumb mb-4">
                            <li >Matr??cula:&nbsp</li>
                            <li class="breadcrumb-item active">20211134040001</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Boletim Escolar
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Disciplina</th>
                                            <th>1??Bimestre</th>
                                            <th>2??Bimestre</th>
                                            <th>3??Bimestre</th>
                                            <th>4??Bimestre</th>
                                            <th>Nota_Final</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Disciplina</th>
                                            <th>1??Bimestre</th>
                                            <th>2??Bimestre</th>
                                            <th>3??Bimestre</th>
                                            <th>4??Bimestre</th>
                                            <th>Nota_Final</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Portugu??s</td>
                                            <td>80</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>70</td>
                                        </tr>
                                        <tr>
                                            <td>Matem??tica</td>
                                            <td>100</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>Hist??ria</td>
                                            <td>80</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>70</td>
                                        </tr>
                                        <tr>
                                            <td>Geografia</td>
                                            <td>100</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>Educa????o F??sica</td>
                                            <td>80</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>70</td>
                                        </tr>
                                        <tr>
                                            <td>Ingl??s</td>
                                            <td>100</td>
                                            <td>60</td>
                                            <td>00</td>
                                            <td>00</td>
                                            <td>80</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                                      
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SGAEF 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/tpt_scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
