@extends('merge.artistas.dashboard.index')
@section('content')
    
<div class="">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #3d2822">
                        <h6 class="text-light">NOTIFICAR CARTEIRA</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(session('sucesso'))
                                <div class="cold-md-12 alert alert-success  text-center">
                                    <span >{{session('sucesso')}}</span>
                                </div>
                            @endif


                           <form action="{{route('carteira.painel.artista.enviar.notificacao')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="">Titulo</label>
                                <select name="titulo" id="titulo" class="form-control">
                                    <option value="">--Selecionar  Titulo--</option>
                                    <option value="Reclamações">Reclamações</option>
                                    <option value="Sugestões">Sugestões</option>
                                    <option value="Duvidas">Duvidas</option>
                                    <option value="Outros Assuntos">Outros Assuntos</option>
                                </select>
                                @error('titulo')
                                    <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Mensagem</label>
                               <textarea placeholder="Informe aqui sua mensagem" name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
                               @error('mensagem')
                                   <span class="text-danger">{{$message}}</span>
                               @enderror
                            </div>
                            <div class="form-group col-md-12 d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn btn-md text-white" style="background: #3d2822"> Enviar <i class="fa fa-paper-plane"></i></button>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>

</div>

@include('sweetAlerts.alerts')
@endsection