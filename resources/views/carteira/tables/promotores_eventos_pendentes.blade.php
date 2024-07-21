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
                                    <h4>Promotores de eventos pendentes por validar</h4>
                                </div>

                                <div class="card-body">
                                    @if(count($pendentPromoterEvents) < 1 ?? '')
                                        <div class="col-md-12 text-center alert alert-warning">
                                            Nenhum promotor de eventos pendente por validar
                                        </div>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead style="background: #3d2822;" class="text-white">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nome</th>
                                                        <th>Data nascimento</th>
                                                        <th>País</th>
                                                        <th>Naturalidade</th>
                                                        <th>Email</th>
                                                        <th>Bilhete de identidade</th>
                                                        <th class="text-center">Opções</th>

                                                </thead>
                                                <tbody>
                                                    @foreach ($pendentPromoterEvents as $promoter)
                                                        <tr>
                                                            <td>{{$promoter->id ?? ''}}</td>
                                                            <td>{{$promoter->name ?? ''}}</td>
                                                            <td>{{$promoter->data_nascimento ?? ''}}</td>
                                                            <td>{{$promoter->pais ?? ''}}</td>
                                                            <td>{{$promoter->provincia ?? ''}}</td>
                                                            <td>{{$promoter->email ?? ''}}</td>
                                                            <td>
                                                                <a target="_blank" class="d-flex align-items-center" href="/storage/files/bilhete_identidade_anexos/{{$promoter->bilhete_identidade_anexo ?? ''}}">
                                                                    {{isset($promoter->bilhete_identidade_anexo) ? $promoter->bilhete_identidade_anexo = 'bilhete-identidade.pdf' : ''}}
                                                                </a>

                                                            </td>
                                                            

                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                   @include('carteira.modals.notificate-promotor') 
                                                                   @include('carteira.modals.rejeitar-inscricao_promotor') 
                                                                   <a data-toggle="modal" data-target="#notificate_promoter-{{$promoter->id}}" class="btn btn-sm btn-warning mx-1 {{$promoter->status === 'notificado' || $promoter->status === 'verificado' ? 'disabled' : ''}}"> {{$promoter->status === 'notificado' || $promoter->status === 'verificado' ? 'Notificado'  : 'Notificar'}} </a>
                                                                   {{-- <a data-toggle="modal" data-target="#validate_artist-{{$artist->id}}"  class="btn btn-sm btn-primary">Validar</a> --}}
                                                                   <a data-toggle="modal" data-target="#rejeitar_inscricao_promoter-{{$promoter->id}}" class="btn btn-danger btn-sm" href="">Rejeitar</a>
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
