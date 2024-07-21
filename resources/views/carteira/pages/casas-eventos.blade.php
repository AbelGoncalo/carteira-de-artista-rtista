@include('carteira.includes.header')
@include('sweetAlerts.alerts')
<!-- comment-->
    <!-- Page Wrapper -->
<div id="wrapper">
       <!-- Sidebar -->
        @include('carteira.includes.sidebar')
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                            @include('carteira.includes.top-bar')
        
                        <!-- End of Topbar -->

                        <div class="container-fluid">
                            <div class="card shadow">
                                <div class="card-header text-white" style="background: #3d2822">
                                    <h4 style="color: white !important" class="text-uppercase text-muted">Casas de eventos </h4>
                                </div>
                                <div class="card-body">

                                    <div class="d-flex  flex-wrap col-md-12">
                                        {{-- @include('carteira.modals.ver-calendario-casa') --}}

                                        @foreach($calendars as $calendar)
                                        
                                            <div class="card  mx-2 my-2" style="width: 15rem;">
                                                <img class="card-img-top" src="/storage/files/fotos_casas_evento/{{$calendar->foto_ilustrativa_espaco}}" alt="Card image cap">
                                                <div class="card-body">
                                                <h4 class="card-title te">{{$calendar->nome ?? ''}}</h4>
                                                
                                                <a  style="background: #3d2822" href="{{route('carteira.artista.list.calendar',$calendar->id)}}" class="btn btn-sm text-white btn ">ver calendário</a>
                                                </div>
                                            </div>
                                            
                                        @endforeach

                                    </div>
                                    
                                    




                                </div>
                            </div>

                        </div>
                    </div>
    </div>
</div>

@include('carteira.includes.footer')



