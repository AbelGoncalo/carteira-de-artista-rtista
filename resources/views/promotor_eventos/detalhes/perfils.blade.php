@extends("merge.promotor_eventos.dashboard.index")
@section("content")
@include("sweetAlerts.alerts")


    <!-- Page Wrapper -->
<div id="wrapper">
    @include("promotor_eventos.dashboard.includes.sidebar")

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("promotor_eventos.dashboard.includes.top-bar")
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    

                    <!-- Content Row -->

                    <div class="row">
                        @if(session('errorSentMessage'))
                        <div class="col-md-12">
                            {{session('errorSentMessage')}}
                        </div>
                        @endif

                        <div class="col-md-12">
                           <div class="card ">
                            <div class="card-header text-uppercase  text-white" style="background-color: #3d2822;">
                                <h4>Meu Perfil</h4> 
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12 container d-flex align-items-center">


                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card card-custom-info mt-2">
                                                        <div class="card-header" style="background: #3d2822">
                                                            <h6 class="text-light">INFORMAÇÕES PESSOAIS</h6>
                                                        </div>
                                                        <div class="card-body card-custom-info">
                                                            <ul class="list-group ">
                                                                <li class="list-group-item">
                                                                  <b>Nome Completo</b> <a class="float-right">{{$promotor->name ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                  <b>Data nascimento</b> <a class="float-right">{{$promotor->data_nascimento ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                               
                                                                <li class="list-group-item">
                                                                  <b>nif</b> <a class="float-right">{{$promotor->nif ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                  <b>Código Postal</b> <a class="float-right">{{$promotor->codigo_postal ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                  <b>Bairro</b> <a class="float-right">Luanda</a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                  <b>E-mail</b> <a class="float-right">{{$promotor->email ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                  <b>Telefone</b> <a class="float-right">{{$promotor->telefone ?? 'Informação Indisponível'}}</a>
                                                                </li>
                                                            </ul>
                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card card-custom-info mt-2" >
                                                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap" style="background: #3d2822">
                                                            <h6 class="text-light" >Informação do Promotor</h6>
                                                           
                                                        </div>

                                                        
                                                        <div class="card-body">
                                                           
                                
                                                            <div class="rounded shadow card-custom frente">
                                                                    
                                                                <div class="text-center mt-3">
                                                                      <h4 class="text-uppercase font-weight-bold">Nome Artisitico: {{$promotor->name ?? 'Informação Indisponível'}}</h4>
                                                                      
                                                                      <span class="text-uppercase font-weight-bold text-sm" style="font-size:12px;">Nome Artistico</span><br>
                                                                         
                                                                </div>
                                
                                                                <div style="text-align: center" class="py-4">
                                
                                                                    <span class="font-weight-bold" style="font-size:12px;">Email:{{$promotor->email ?? 'Informação Indisponível'}}</span><br>
                                                                    <span class="font-weight-bold" style="font-size:12px;">Provincia:{{$promotor->telefone ?? 'Informação Indisponível'}}</span><br>
                                                                      <span class="font-weight-bold" style="font-size:12px;">Referencia: {{$promotor->referencia ?? 'Informação Indisponível'}}</span><br>
                                                                      <span class="font-weight-bold" style="font-size:12px;">Telefone:{{$promotor->telefone ?? 'Informação Indisponível'}}</span>
                                                                      
                                                                </div>
                                                                
                                    
                                                                </div>
                                                                <p class="text-muted text-size text-center">Alterar minhas credenciais.</p>
                                                            <div class="rounded shadow card-custom d-flex justify-content-center align-items-center">
                                                                
                                                                <a  href="" data-toggle="modal" data-target="#editModal" class="btn btn-md text-light font-weight-bold mb-2"  style='background: #3d2822; font-size:12px'>Editar <i class="fa fa-paper-plane"></i></a>
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



                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

</div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja terminar sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique em cancelar se deseja permanecer conectado ou sim para terminar a sua sessão.</div>
                <div class="modal-footer border-0">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Sim</a>
                </div>
            </div>
        </div>
    </div>

       <!-- Logout edit-->

<div wire:ignore.self data-backdrop="static" data-backdrop="static" class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog  modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
           
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header" style="background: #3d2822; color:#ffff">
                    <h6><i class="fa fa-search"></i> Editar Perfil</h6>
                </div>
    
            </div>
            <div class="container">
               
                <div class="modal-body">
                    <form action="{{route('carteira.artista.promotor.mudar.senha')}}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-form-label">E-mail:</label>
                            <input name="cpassword" value="{{Auth::user()->email ?? ''}}" type="email" class="form-control" placeholder="exemplo@email.com"id="cpassword">
                          </div>
                      <div class="mb-3">
                        <label for="cpassword" class="col-form-label">Senha atual:</label>
                        <input name="cpassword" type="password" class="form-control" placeholder="********"id="cpassword" >
                      </div>
                      <div class="mb-3">
                        <label for="npassword" class="col-form-label"  placeholder="********"  >Nova senha:</label>
                        <input name="npassword" type="password" class="form-control" id="npassword" >
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label"  placeholder="********"  >Confirmar senha:</label>
                        <input name="cnpassword" type="password" class="form-control" id="cnpassword">
                      </div>
                      
                        <button type="submit" class="btn btn-md text-light" style="background-color: #3d2822">Alterar</button>
                       
                    </form>
                </div>
               
            </div>
            <div class="table-responsive">
                
            </div>
        </div>
        
    </div>
</div>
</div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

