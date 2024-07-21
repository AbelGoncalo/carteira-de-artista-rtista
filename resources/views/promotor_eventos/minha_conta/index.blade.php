
@extends('merge.artistas.dashboard.index')
@section('content')
@include('sweetAlerts.alerts')
<div class="">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 d-flex justify-content-center align-items-center flex-wrap">
                <div class="col-md-8">
                    <div class="card card-custom-info shadow">
                        <div class="card-header" style="background: #3d2822">
                            <h6 class="text-light">ALTERAR SENHA / ADICIONAR UMA FOTO</h6>
                        </div>
                        <div class="card-body card-custom-info">
                                <div class="container">
                                    <form action="{{route('Mudar.senha')}}" method="POST" class="row">
                                        @csrf
                                        <div class="form-group col-md-4">
                                            <label for="password">Senha Actual</label>
                                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="********">
                                            @error('cpassword') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="npassword">Nova Senha</label>
                                            <input type="password" name="npassword" id="npassword" class="form-control" placeholder="********">
                                            @error('npassword') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="cpassword">Confirmar Senha</label>
                                            <input type="password" name="cnpassword" id="cnpassword" class="form-control" placeholder="********">
                                            @error('cnpassword') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-md text-light" style="background-color: #3d2822">Alterar</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <form  action="{{route('carregar.foto')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="form-inline">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="photo" class="sr-only">Password</label>
                                          <input type="file" accept=".png,.jpeg,.jpg,.gif" name="foto_perfil" class="form-control" id="foto_perfil">
                                        </div>
                                        <button type="submit" class="btn btn-md mb-2 text-light" style="background-color: #3d2822">Salvar</button>
                                         </div>
                                        <div class="form-group mx-3">
                                            @error('foto_perfil') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                      </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

</div>


@endsection
<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>