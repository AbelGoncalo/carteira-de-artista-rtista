@include('carteira.includes.header')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('carteira.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('carteira.includes.top-bar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <div class="row">



                        <div class="col-md-12">

                            <div class="card shadow">
                                <div style="background: #3d2822;" class="card-header text-light">
                                    <h4>Artistas pendentes por emitir carteira de artista</h4>
                                </div>

                                <div class="card-body">
                                    @if(isset($artistsWithoutCarteira) ? count($artistsWithoutCarteira) < 1 : '')
                                        <div class="col-md-12 text-center alert alert-warning">
                                            Nenhum carteira pendente por solicitar
                                        </div>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead style="background: #3d2822;" class="text-white">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Artista</th>                                                        
                                                        <th>Qrcode</th>                                                        
                                                        <th>Modalidade</th>                                                        
                                                        <th>Validade</th>                                                        
                                                        <th>Opções</th>

                                                </thead>
                                                <tbody>
                                                    @foreach($artistsWithoutCarteira as $artist)
                                                    <tr>
                                                        <td>{{$artist->id ?? ''}}</td>
                                                        <td>{{$artist->nome_completo ?? ''}}</td>
                                                        <td>{{$artist->qrcode ?? ''}}</td>
                                                        <td>{{$artist->validade ?? ''}}</td>                                                  
                                                
                                                        
                                                        <td>
                                                            {{isset($artist->historial_artistico_anexo) ? $artist->historial_artistico_anexo = 'historial_artistico.pdf' : ''}}
                                                            </a>

                                                        </td>

                                                        <td>
                                                         <div class="d-flex align-items-center">
                                                            @include('carteira.modals.notificate-artist') 
                                                        <a data-toggle="modal" data-target="#notificate_artist-{{$artist->id}}" class="btn btn-sm btn-warning mx-1"> Confirmar</a>
                                                        {{-- <a data-toggle="modal" data-target="#validate_artist-{{$artist->id}}"  class="btn btn-sm btn-primary">Validar</a> --}}
                                                         </div>
                                                        </td>


                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    @endif

                                </div>

                            </div>

                        </div>



                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('carteira.modals.logout')
    @include('carteira.includes.footer')
