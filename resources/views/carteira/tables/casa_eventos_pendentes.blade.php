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
                                    <h4>Casas de Eventos pendentes por validar</h4>
                                </div>

                            <div class="card-body">
                                    @if(isset($pendentHuseOfEvents) ? count($pendentHuseOfEvents) < 1 : '')
                                        <div class="col-md-12 text-center alert alert-warning">
                                            Nenhuma casa de eventos pendente por validar
                                        </div>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead style="background: #3d2822;" class="text-white">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Casa</th>
                                                        <th>Província</th>
                                                        <th>Município</th>
                                                        <th>Bairro</th>
                                                        <th>Ponto de referência</th>
                                                        <th>Email</th>
                                                        <th>Telefone</th>
                                                        <th>Foto ilustrativa</th>
                                                        {{-- <th>Documento legal.espaço</th> --}}
                                                        <th>Opções</th>

                                                </thead>
                                                <tbody>

                                                    @foreach($pendentHuseOfEvents as $key=> $house)
                                                    <tr>
                                                        <td>{{$house->id ?? ''}}</td>
                                                        <td>{{$house->name ?? ''}}</td>
                                                        <td>{{$house->provincia ?? ''}}</td>
                                                        <td>{{$house->municipio ?? ''}}</td>
                                                        <td>{{$house->bairro ?? ''}}</td>
                                                        <td>{{$house->ponto_referencia ?? ''}}</td>
                                                        <td>{{$house->email ?? ''}}</td>
                                                        <td>{{$house->telefone ?? ''}}</td>
                                                        <td>
                                                             <a class="d-flex justify-content-center align-items-center" href="/storage/files/fotos_casas_evento/{{$house->foto_ilustrativa_espaco}}">
                                                                <img width="60px" src="/storage/files/fotos_casas_evento/{{$house->foto_ilustrativa_espaco}}" alt="">
                                                            </a> 

                                                            
                                                        </td>

                                                        {{-- <td>
                                                            <a href="/storage/files/documentos_casa_evento/{{$house->documentos ?? ''}}">{{$house->documentos ?? ''}}</a>
                                                            
                                                        </td> --}}

                                                        <td>
                                                        <div class="d-flex align-items-center">
                                                            @include('carteira.modals.validate-casa-eventos')
                                                            <a data-toggle="modal" data-target="#validate_house_of_event-{{$house->id}}" class="btn btn-sm btn-primary">Validar</a>
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        @endforeach



                                                </tbody>
                                            </table>
                                        </div>
                                    @endif

                                    <!--Paginator -->
                                        <div>{{$pendentHuseOfEvents->links()}}</div>

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
