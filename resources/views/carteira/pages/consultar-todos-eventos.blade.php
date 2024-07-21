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
                                    <h4>Eventos </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead style="background: #3d2822" class="text-uppercase text-white" >
                                                <th>Casa de evento</th>
                                                <th>Evento</th>
                                                <th>Data de inicio</th>
                                                <th>Data de término</th>
                                                <th>Ponto de referência</th> 
                                                <th>Contacto</th> 
                                                
                                            </thead>

                                            <tbody>
                                                @foreach($events as $event)

                                                <tr>
                                                    <td>{{ $event->nome ?? ''}}</td>
                                                    <td>{{ $event->title ?? ''}}</td>
                                                    <td>{{ $event->start ?? ''}}</td>
                                                    <td>{{ $event->end ?? ''}}</td>
                                                    <td>{{ $event->ponto_referencia ?? ''}}</td>
                                                    <td>{{ $event->telefone ?? ''}}</td>
                                                </tr>

                                                @endforeach                                                        
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
    </div>
</div>

