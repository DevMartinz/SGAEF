<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>|SGAEF| - Membros</title>
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
                            <div class="sb-sidenav-menu-heading">Gestão Acadêmica</div>
                            <a class="nav-link" href="{{ route('secretaries.service_call') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Exibir Solicitações
                            </a>
                            <div class="sb-sidenav-menu-heading">Turmas</div>
                            <a class="nav-link" href="{{ route('secretaries.classes') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Visualizar Turmas
                            </a>
                            <div class="sb-sidenav-menu-heading">Administração</div>
                            <a class="nav-link" href="{{ route('secretaries.members') }}" style="color:white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Exibir Membros
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
                            <li >Matrícula:&nbsp</li>
                            <li class="breadcrumb-item active">20211134040001</li>
                        </ol>
                        <div class="row" id="row-auth-home">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Exibir Alunos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('secretaries.members') }}">Lista de Alunos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Exibir Professores</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('secretaries.members') }}">Lista de Professores</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Exibir Secretários</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('secretaries.members') }}">Lista de Secretários</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Lista de Membros:</h3>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Alunos Cadastrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Matrícula</th>
                                            <th>Aluno</th>
                                            <th>Ação</th>                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Matrícula</th>
                                            <th>Aluno</th>
                                            <th>Ação</th>     
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>2021113404</td>
                                            <td>Alan Patrick Silva</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
                                        </tr>
                                        <tr>
                                            <td>2021113405</td>
                                            <td>Bianca Soares Rocha</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
                                        </tr>
                                        <tr>
                                            <td>2021113406</td>
                                            <td>Bruno Martins Alves</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
                                        </tr>
                                        <tr>
                                            <td>2021113407</td>
                                            <td>Kleber Cauã Nascimento</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
                                        </tr>
                                        <tr>
                                            <td>2021113408</td>
                                            <td>Maurício Silva Santos</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
                                        </tr>
                                        <tr>
                                            <td>2021113410</td>
                                            <td>Maria Soares Inei</td>
                                            <td><button class="button_view_ms">VIEW</button><button class="button_switch_ms">EDIT</button><button  class="button_rem_ms">REMOVE</button></td>
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
