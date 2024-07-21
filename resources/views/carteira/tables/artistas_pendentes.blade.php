@include('carteira.includes.header')
@include("artistas.galeria._script")
@include("artistas.galeria.script")
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
                                    <h4>Artistas pendentes por validar</h4>
                                </div>

                                <div class="card-body">
                                    @if(isset($pendentArtists) ? count($pendentArtists) < 1 : '')
                                        <div class="col-md-12 text-center alert alert-warning">
                                            Nenhum artista pendente por validar
                                        </div>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead style="background: #3d2822;" class="text-white ">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nome</th>
                                                        <th>Data nascimento</th>
                                                        <th>Nacionalidade</th>
                                                        <th>Naturalidade</th>
                                                        <th>Email</th>
                                                        <th>Telefone</th>
                                                        <th>Foto</th>
                                                        <th>Bilhete de identidade</th>
                                                        <th>Historial artistico</th>
                                                        <th>decl.compromisso honra</th>
                                                        <th>doc.filiação artista</th>
                                                        <th>Opções</th>

                                                </thead>
                                                <tbody>
                                                    @foreach($pendentArtists as $artist)
                                                    <tr>
                                                        <td>{{$artist->id ?? ''}}</td>
                                                        <td>{{$artist->nome_completo ?? ''}}</td>
                                                        <td>{{$artist->data_nascimento ?? ''}}</td>
                                                        <td>{{$artist->nacionalidade ?? ''}}</td>
                                                        <td>{{$artist->naturalidade ?? ''}}</td>
                                                        <td>{{$artist->email ?? ''}}</td>
                                                        <td>{{$artist->telefone ?? ''}}</td>
                                                        <td>
                                                            <a class="d-flex justify-content-center align-items-center" href="">
                                                                <img id="foto_meio_corpo" width="60" src="/storage/associacao/{{$artist->foto_meio_corpo ?? ''}}" alt="">
                                                            </a>
                                                        </td>

                                                        <td>
                                                            <a target="_blank" href="/storage/bi/{{$artist->bi_anexo ?? ''}}">
                                                            {{isset($artist->bi_anexo) ? $artist->bi_anexo = 'bilhete.pdf' : ''}}
                                                            </a>
                                                        </td>
                                                        
                                                        <td>
                                                            <a target="_blank" href="/storage/historial/{{$artist->historial_artistico_anexo ?? ''}}">
                                                            {{isset($artist->historial_artistico_anexo) ? $artist->historial_artistico_anexo = 'historial.pdf' : ''}}
                                                            </a>
                                                        </td>

                                                        <td>
                                                            <a target="_blank" href="/storage/declaracao/{{$artist->declaracao_compromisso_honra_anexo ?? ''}}">
                                                            {{isset($artist->declaracao_compromisso_honra_anexo) ? $artist->declaracao_compromisso_honra_anexo = 'declaração.pdf' : ''}}
                                                            </a>
                                                        </td>


                                                        <td>
                                                            <a target="_blank" href="/storage/declaracao/{{$artist->doc_filiacao_associacao_artista_anexo ?? ''}}">
                                                            {{isset($artist->doc_filiacao_associacao_artista_anexo) ? $artist->doc_filiacao_associacao_artista_anexo = 'doc.filiação.pdf' : ''}}
                                                            </a>
                                                        </td>


                                                        <td>
                                                         <div class="d-flex align-items-center">
                                                            @include('carteira.modals.notificate-artist') 
                                                            @include('carteira.modals.rejeitar-inscricao') 
                                                            <a data-toggle="modal" data-target="#notificate_artist-{{$artist->id}}" class="btn btn-sm btn-warning mx-1 {{$artist->status === 'notificado' || $artist->status === 'verificado' ? 'disabled' : ''}}"> {{$artist->status === 'notificado' || $artist->status === 'verificado' ? 'Notificado'  : 'Notificar'}} </a>
                                                            {{-- <a data-toggle="modal" data-target="#validate_artist-{{$artist->id}}"  class="btn btn-sm btn-primary">Validar</a> --}}
                                                            <a data-toggle="modal" data-target="#rejeitar_inscricao_artist-{{$artist->id}}" class="btn btn-danger btn-sm" href="">Rejeitar</a>
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
