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
                                <h4>Artistas</h4> 
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12 container d-flex align-items-center">


                                        @foreach ($artistas as $artista)
                                          
                                            <div class="card mx-2" style="width: 18rem;">
                                                <div class="container" style="border-radius: 100%; width: 100px; height: 100px; border: 2px solid #3d2822 ;">
                                            
                                                    <img class="img-profile rounded-circle" src="/assets/admin/img/undraw_profile.svg" style="border-radius: 100%;">
                                                </div>
                
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase text-center">{{$artista->nome_completo}}</h5>
                                                    <a style='background: #3d2822; font-size:12px;align-items: center;' href="{{route('carteira.artista.promotor.detalhes.artista',$artista->id)}}" class="btn btn-primary">detalhes</a>


                                                    <div class="d-flex justify-content-center ">
                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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



    

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

