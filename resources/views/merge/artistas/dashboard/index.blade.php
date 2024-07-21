@include("layouts.artistas.dashboard.header")

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background: #3d2822 !important;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="d-flex  my-5 flex-column justify-content-center sidebar-brand d-flex align-items-center justify-content-center my-4" href="">

                <div class=" col-md-12 text-dark sidebar-brand-text mx-3 ">
                  
                    <img style="width: 3rem" src="{{asset('/assets/images/logotipo.png')}}" alt="logotipo da Instituição">
                    <p style="font-size: .6rem;color:#fff">Comissão da Carteira Profissional do Artista</p>

                </div>
            </a>


            <hr class="sidebar-divider my-3">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item active my-1">
                <a class="nav-link  {{(Route::Current()->getName() === 'carteira.painel.artista') ? 'bg-light text-dark':''}} rounded " href="{{route('carteira.painel.artista')}}">
                    <i class="fa fa-calendar"></i>
                   
                  
                    <span>MINHA AGENDA</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link   rounded text-light {{(Route::Current()->getName() === 'carteira.painel.artista.minha.carteira') ? 'bg-light text-dark':''}}" href="{{route('carteira.painel.artista.minha.carteira')}}">
                    <i class="fa fa-address-card"></i>
                    <span>Minha Carteira</span></a>
            </li>
            <li class="nav-item active my-1">
                <a class="nav-link   rounded text-light {{(Route::Current()->getName() === 'carteira.painel.artista.notificacoes') ? 'bg-light text-dark':''}}" href="{{route('carteira.painel.artista.notificacoes')}}">
                    <i class="fa-solid fa-bell"></i>
                    <span>Notificar Carteira</span></a>
            </li>
            <li class="nav-item active my-1">
                <a class="nav-link   rounded text-light {{(Route::Current()->getName() === 'carteira.painel.artista.pagamentos') ? 'bg-light text-dark':''}}" href="{{route('carteira.painel.artista.pagamentos')}}">
                    <i class="fa-solid fa-money-bill"></i>
                    <span>Pagamentos</span></a>
            </li>
            <li class="nav-item active my-1">
                <a class="nav-link   rounded text-light {{(Route::Current()->getName() === 'carteira.painel.artista.galeria') ? 'bg-light text-dark':''}}" href="{{route('carteira.painel.artista.galeria')}}">
                    <i class="fa-solid fa-images"></i>
                    <span>Galeria</span></a>
            </li>
            <li class="nav-item active my-1">
                <a class="nav-link   rounded text-light {{(Route::Current()->getName() === 'carteira.painel.artista.fatura') ? 'bg-light text-dark':''}}" href="{{route('carteira.painel.artista.fatura')}}">
                    <i class="fa-solid fa-cash-register"></i>
                    <span>Faturas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
     
         


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <p class="font-weight-bold text-muted">PAINEL DO ARTISTA</p>

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

                     

                       
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name ?? ''}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{(auth()->user()->foto != null) ? asset('/storage/fotos_perfil/'.auth()->user()->foto): '/assets/admin/img/undraw_profile.svg'}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('carteira.painel.artista.conta')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Minha Conta
                                </a>

                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Terminar Sessão
                                    </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    @if (Route::Current()->getName() === 'carteira.painel.artista')
                        
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <livewire:convite-component />
                      
                        <!-- Earnings (Monthly) Card Example -->
                        <div  class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                <h5 class="h6 text-dark">CONVITES ACEITES</h5>
                                            </div>
                                            <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{$aceites}}</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fa fa-calendar-check fa-3x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                <h5 class="h6 text-dark">CONVITES REJEITADOS</h5>
                                            </div>
                                            <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{$rejeitados}}</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fa fa-calendar-xmark fa-3x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    



                    </div>
                    @endif

                    <!-- Content Row -->

                    <div class="row">



                        <div class="col-md-12">

                            @yield('content')

                        </div>

                    </div>



                </div>

                <!-- Content Row -->
                <div class="row">


                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->



      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmar Ação?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
              
                Tem a Certeza que deseja terminar sessão da sua conta?
              </div>
              <div class="modal-footer">
                  <button class="btn btn-sm btn-danger font-*weight-bold" type="button" data-dismiss="modal">Cancelar</button>
                  <a class="btn btn-sm text-light font-weight-bold" style="background-color: #3d2822" href="{{route('logout')}}">Sim, Terminar Sessão</a>
              </div>
          </div>
      </div>
  </div>

@include("layouts.artistas.dashboard.footer")
