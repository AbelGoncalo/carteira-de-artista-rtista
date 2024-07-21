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
                                <h4>Mensagens</h4> 
                            </div>
                            <div class="card-body">
                                
                                <form method="POST" action="{{route('carteira.artista.promotor.send.mensage')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Título:</label>
                                        <select name="title" id="" class="form-control">
                                            <option value="Reclamações">Reclamações</option>
                                            <option value="Sugestões">Sugestões</option>
                                            <option value="Dúvidas">Dúvidas</option>
                                            <option value="Outros assuntos">Outros assuntos</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="" cols="30" rows="10">
                                        </textarea>
                                    </div>
                                    <div class="form-group" >
                                        <button type="submit" style="background-color: #3d2822;" class="btn text-light">Enviar</button>
                                    </div>

                                        

                                </form>


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




    

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

