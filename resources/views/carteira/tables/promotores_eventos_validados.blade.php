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
                                    @if(count($validatedArtists) < 1)
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
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <a class="btn btn-sm btn-primary" href="{{route('carteira.artista.validate.data.promoter.events', $promoter->id ?? '')}}">Validar</a>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('carteira.includes.footer')
