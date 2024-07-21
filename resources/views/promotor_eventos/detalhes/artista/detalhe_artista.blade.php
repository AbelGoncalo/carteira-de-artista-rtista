@extends("merge.promotor_eventos.dashboard.index")
@section("content")
@include('sweetAlerts.alerts')

    <!-- Page Wrapper -->
<div id="wrapper">
    @include("promotor_eventos.dashboard.includes.sidebar")


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h2 class="h6 text-uppercase ">Painel Do Promotor - {{Auth::user()->name ?? ''}}</h2>
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                        alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                        alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name ?? ''}}</span>
                            <img class="img-profile rounded-circle"
                                src="/assets/admin/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="{{route('carteira.artista.show.my.details')}}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Minha conta
                            </a>

                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Terminar sessão
                                </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->


            <div class="col-md-12">
                <div class="card shadow">
                    <div style="background: #3d2822;" class="text-white card-header">
                        <h4>Artista >> Informações</h4>
                    </div>
                    <div class="card-body">
                       
                       <div class="col-md-12 d-flex align-items-start justify-content-center">

                           <div class="col-md-8">
                               <div class="card card-custom-info mt-2">
                                   <div class="card-header" style="background: #3d2822">
                                       <h6 class="text-light">INFORMAÇÕES PESSOAIS</h6>
                                   </div>
                                   <div class="card-body card-custom-info">
                                       <ul class="list-group ">
                                           <li class="list-group-item">
                                             <b>Nome completo </b> <a class="float-right"> {{$artista->nome_completo ?? ''}}</a>
                                           </li>
                                           <li class="list-group-item">
                                            <b>Nome do pai </b> <a class="float-right"> {{$artista->nome_pai ?? ''}}</a>
                                          </li>

                                          <li class="list-group-item">
                                            <b>Nome da mãe </b> <a class="float-right"> {{$artista->nome_mae ?? ''}}</a>
                                          </li>
                                           <li class="list-group-item">
                                             <b>Data de nascimento</b> <a class="float-right">{{$artista->data_nascimento ?? ''}}</a>
                                           </li>
                                           <li class="list-group-item">
                                            <b>Género</b> <a class="float-right">{{$artista->genero ?? ''}}</a>
                                           </li>
                                           
                                           <li class="list-group-item">
                                            <b>Naturalidade</b> <a class="float-right">{{$artista->naturalidade ?? ''}}</a>
                                            </li>
                                        </li>
                                        <li class="list-group-item">
                                         <b>Género</b> <a class="float-right">{{$artista->genero ?? ''}}</a>
                                        </li>
                                           <li class="list-group-item">
                                            <b>Estado civil</b> <a class="float-right">{{$artista->estado_civil ?? ''}}</a>
                                        </li>
                                           <li class="list-group-item">
                                            <b>Telefone</b> <a class="float-right">{{$artista->telefone ?? ''}}</a>
                                        </li>
                                           <li class="list-group-item">
                                            <b>Ponto de referência</b> <a class="float-right">{{$artista->endereco ?? ''}}</a>
                                        </li>
                                           <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">{{$artista->email ?? ''}}</a>
                                        </li>
                                       </ul>
               
                                   </div>
                               </div>
                           </div>
   
   
                           <div class="col-md-4">
                               <div class="card card-custom-info mt-2">
                                   <div class="card-header" style="background: #3d2822">
                                       <h6 class="text-light text-uppercase">FOTO DO ARTISTA</h6>
                                   </div>
                                   <div class="card-body card-custom-info">
                                       <div>
                                        <img class="img-fluid" height="350px" width="400px"  src="/assets/admin/img/undraw_profile.svg" alt="">
                                       </div>

                                       <div class="my-3 text-center">
                                           <h6 class="text-uppercase text-muted">NOME ATÍSTICO:{{$artista->nome_completo ?? ''}}</h6>
                                           
                                        </div>
                                   </div>
                               </div>
                           </div>

                        </div> 
                            
                    </div>
                </div>
            </div>

        </div>

            

    </div>

</div>


@endsection