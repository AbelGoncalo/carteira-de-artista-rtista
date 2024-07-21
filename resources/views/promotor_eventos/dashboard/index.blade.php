@extends("merge.promotor_eventos.dashboard.index")
@section("content")
@include("promotor_eventos.dashboard.modals.casas_eventos")
@include("promotor_eventos.dashboard.modals.form_cadastro_casa_evento")
@include("inc.form_cadastro_evento")
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

                    @include("promotor_eventos.dashboard.includes.estatistica")

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-md-12">

                            <div class="">


                                {{-- <div class="table-responsive">
                                    <table class="table table-striped table-bordered  table-hover">
                                        <thead class='text-uppercase text-white'  style="background-color: #AB6364;">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Provincia</th>
                                                <th>Município</th>
                                                <th>Bairro</th>
                                                <th>Foto</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                                --}}

                                <!-- <div class="card">


                                    <div class="card-header" style="background:  #3d2822;">
                                        <h3 class=" text-uppercase text-white">Minhas casas de eventos</h3>
                                    </div>

                                    <div class="mx-4 my-2 d-flex align-items center">
                                        <a data-toggle="modal" data-target="#eventos" class="d-flex align-items-center btn btn-success bg-default text-white mx-1 " href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                              </svg>
                                            Adicionar
                                        </a>

                                        <a class=" d-flex align-items-center btn btn-secondary bg-default text-white " href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                              </svg>
                                            Gerenciar
                                        </a>
                                    </div>

                                        <div class="d-flex col-md-12 align-items-center">
                                        @if(count($promotor_casa_eventos) < 1)
                                            <div class="alert alert-warning col-md-12 text-dark text-center">Não tem registada nenhuma casa de evento sua na plataforma, <a data-toggle="modal" data-target="#eventos" href="#">clique aqui para cadastrar</a></div>
                                        @else
                                            @foreach($promotor_casa_eventos as $houseOfEvents)
                                                        <div class="card mx-2 mb-2 mt-2" style="width: 18rem;">
                                                            <img height="150rem" width="15px" class="card-img-top img-responsive" src="/storage/files/fotos_casas_evento/{{$houseOfEvents->	foto_iltustrativa_espaco}}" alt="Card image cap">
                                                            <div class="card-body ">
                                                                <div>
                                                                    <h5 class=" card-title text-uppercase">{{$houseOfEvents->nome ?? ''}}</h5>
                                                                    <p class="card-text">Província: {{$houseOfEvents->provincia ?? ''}}</p>
                                                                    <p class="card-text">Município: {{$houseOfEvents->municipio ?? ''}}</p>
                                                                    <p class="card-text">Ponto de referência: {{$houseOfEvents->ponto_referencia ?? ''}}</p>
                                                                </div>

                                                            <div class="">
                                                                <a style="background: #3d2822;" class="btn btn-sm-block text-white p-2 m-2" href="">ver calendário</a>
                                                            </div>

                                                            </div>


                                                        </div>
                                            @endforeach
                                        @endif
                                         </div>


                                </div> -->

                                <div class="">
                                    

                                </div>


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

</div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

