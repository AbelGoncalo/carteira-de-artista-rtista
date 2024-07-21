@extends("merge.login.index")
@section("content")
@include("sweetAlerts.alerts")

<main>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-8" style="margin-top: 10%">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">

                                <div style='margin-top: 15%;' class="d-flex container align-items-center flex-column justify-content-center">
                                   <div>
                                        <img src="/assets/images/logotipo.png" alt="" class="img-responsive">                                   </div>

                                   <div>
                                    <h5 class="h5 my-2 font-weight-bold text-center text-dark text-uppercase">Comissão da Carteira Profissional do Artista</h5>
                                </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="">
                                        <h1 class="h2 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form action="{{route('comissao.profissional.artista.user.authenticated')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control "
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Digite o seu email...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control "
                                                id="exampleInputPassword" placeholder="Digite a sua senha...">
                                        </div>

                                        <div class="d-flex align-items-center my-1 mb-2">
                                            <span>Ainda não tem uma conta na nossa plataforma? <a data-toggle="modal" data-target="#logoutModal" href="/">clique aqui para criar</a></span>
                                        </div>

                                        <button style="background: #3d2822;" type="submit" class="btn text-white">
                                            Login
                                        </button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</main>

@endsection








<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

