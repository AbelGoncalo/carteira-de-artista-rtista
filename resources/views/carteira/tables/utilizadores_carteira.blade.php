@include('carteira.includes.header')
@include('carteira.modals.forms.utilizador')
@include('sweetAlerts.alerts')
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
                                    <h4>Utilizadores com privilégios Administrativos cadastrados na carteira</h4>
                                </div>

                                <div class="card-body">
                                    @if(count($carteira_users) < 1)
                                        <div class="d-flex col-md-12 justify-content-center align-items-center alert alert-warning text-center">Nenhum utilizador cadastrado. <a data-toggle="modal" data-target="#createAccountCarteiraUserAdmin" href="#">clique aqui para adicionar</a> </div>
                                        @else
                                        <div class="table-responsive">
                                            <div class="mb-3">
                                            </div>
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead style="background:#3d2822" class="text-white" >
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>Estado</th>
                                                        <th>Data de cadastro</th>
                                                        <th class="text-center" >Opçoes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($carteira_users as $user)
                                                        <tr>
                                                            <td>{{$user->id ?? ''}}</td>
                                                            <td>{{$user->name ?? ''}}</td>
                                                            <td>{{$user->email ?? ''}}</td>
                                                            <td>{{$user->status === 'pendente' ? $user->status = 'bloqueado' : 'verificado' }}</td>
                                                            <td>{{$user->created_at ?? ''}}</td>
                                                            <td>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                            @include('carteira.modals.block-user')
                                                            @include('carteira.modals.delete-user')
                                                            <a data-toggle="modal" data-target="#formAddUser" class="btn-sm  btn btn-primary" href="#">Adicionar</a>
                                                            <a data-toggle="modal" data-target="#block_user-{{$user->id}}" class=" {{$user['status'] === 'bloqueado' ? 'disabled' : ''}}  btn btn-sm btn-warning mx-1">Bloquear</a>
                                                            <a data-toggle="modal" data-target="#delete_user-{{$user->id}}" class="btn btn-sm btn-danger">Eliminar</a>
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
