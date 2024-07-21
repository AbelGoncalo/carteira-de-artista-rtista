
@extends('merge.artistas.dashboard.index')
@section('content')
@include('artistas.modals.solicitar-emissao-carteira')
<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom-info mt-2">
                    <div class="card-header" style="background: #3d2822">
                        <h6 class="text-light">INFORMAÇÕES PESSOAIS</h6>
                    </div>
                    <div class="card-body card-custom-info">
                        <ul class="list-group ">
                            <li class="list-group-item">
                              <b>Nome Completo</b> <a class="float-right">{{auth()->user()->name ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Gênero</b> <a class="float-right">{{auth()->user()->artista->genero ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Idade</b> <a class="float-right">{{Carbon\Carbon::parse(auth()->user()->artista->data_nascimento)->age ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Estado Cívil</b> <a class="float-right">{{auth()->user()->artista->estado_civil ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Nacionalidade</b> <a class="float-right">{{auth()->user()->artista->nacionalidade ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Naturalidade</b> <a class="float-right">{{auth()->user()->artista->naturalidade ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>E-mail</b> <a class="float-right">{{auth()->user()->email ?? 'Informação Indisponível'}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Telefone</b> <a class="float-right">{{auth()->user()->artista->telefone ?? 'Informação Indisponível'}}</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="height: 38rem" class="card card-custom-info mt-2" >
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap" style="background: #3d2822">
                        <h6 class="text-light" >MINHA CARTEIRA</h6>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button id="frente" type="button" class="btn btn-sm font-weight-bold text-white" style="background: #5d4741"> <i class="fa fa-arrow-left"></i> FRENTE</button>
                          <button id="verso" type="button" class="btn btn-sm font-weight-bold text-white" style="background: #5d4741">VERSO <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (isset($carteira) && $carteira != null)
                          
                        @if (!$validadeDaCarteira)
                       
                        <div class="rounded shadow card-custom d-flex justify-content-center align-items-center flex-wrap">
                          <h5 class="text-muted text-size text-center">Sua Cateira está expirada, clique no botão abaixo para solicitar a renovação.</h5>
                        <a href="#" class="btn btn-md text-light font-weight-bold" style='background: rgb(62, 41, 35);font-size:12px'>Solicitar Renovação <i class="fa fa-paper-plane"></i></a>
                        
                         </div>
                        @else
                        @if ($carteira->modalidade == null || $carteira->validate == null)
                        <div class="rounded shadow card-custom d-flex justify-content-center align-items-center flex-wrap">
                          <h5 class="text-muted text-size text-center">Ainda não possui uma carteira, clique no botão abaixo para fazer a solicitação.</h5>
                          <a data-toggle='modal' data-target='#solicitar-emissao-carteira' href="#" class="btn btn-md text-light font-weight-bold"  style='background: #3d2822; font-size:12px'>Solicitar <i class="fa fa-paper-plane"></i></a>

                         </div>
                        @else
                       

                        @foreach ($artista as $artist)
                          <div style="height: 32rem" class="rounded shadow card-custom frente">
                             <div class="">
                               <img style="margin-top: -4rem; height:10rem;width:100%" src="{{asset('carteiralogo.png')}}" alt="Logotipo da carteira" class="img-fluid">
                             </div>
                             <div class="col-md-12 d-flex justify-content-center align-items-center flex-wrap" >
                               <img src="/storage/associacao/{{$artist->foto_meio_corpo ?? ''}}" alt="" class="img-fluid rounded" style="height: 10rem; border:1px dashed rgb(62, 41, 35); margin-top:-2rem">
                             </div>
                             <div class="text-center mt-3 ">

                              <h5 class="text-danger text-uppercase font-weight-bold">{{$artist->nome_completo ?? ''}}</h5>
                              <p class="text-uppercase font-weight-bold" style="border-bottom: 2px solid red">{{$artist->categoria ?? ''}}</p>
                              <span class="text-uppercase font-weight-bold text-sm" style="font-size:12px;">{{$artist->nome_artistico ?? ''}}</span><br>
                              <span class="text-uppercase font-weight-bold text-sm" style="font-size:12px;">{{$artist->nome_completo ?? ''}}</span><br>
                              
                            </div>
                        @endforeach
                               
                            @foreach ($artista as $artist)
                             <div style="text-align: right">
                                <span class="font-weight-bold" style="font-size:12px;">CARTEIRA: {{'00'.$artist->id ?? ''}}</span><br>
                                <span class="font-weight-bold" style="font-size:12px;">NIF:{{$artist->numero_bi ?? ''}}</span>
                                
                                <div  class="text-center">
                                  <span class="font-weight-bold text-uppercase" style="font-size:12px;">CATEGORIA: {{$artist->categoria ?? ''}}</span><br>
                                </div>
                              </div>

                              

                        </div>

                         <div class="rounded shadow card-custom verso d-none" >
                             <div class="">
                               <img style="margin-top: -4rem; height:10rem;width:100%" src="{{asset('carteiralogo.png')}}" alt="Logotipo da carteira" class="img-fluid">
                             </div>
                             <div class="text-center">
                               <span class="text-uppercase font-weight-bold">Nacionalidade</span><br>
                               <span class="text-uppercase font-weight-bold">{{$artist->nacionalidade ?? ''}}</span>
                             </div>
                            
                             <div class="text-center">
                               <p class=" text-uppercase font-weight-bold mt-2" style="font-size:12px;">{{$artist->categoria ?? ''}}</p>
                             <p style="border-bottom: 2px solid black;" class="mt-3"></p>
                             <span class="font-weight-bold">{{$artist->nome_completo ?? ''}}</span>
                             </div>

                             @endforeach

                             <div class="text-center bg-secondary rounded text-white font-weight-bold mt-1">
                              <span style="font-size: 10px">
                              O titular desta CARTEIRA é artista creditado pela Comissão da Carteira Profissional do Artista.
                              Agradecemos toda a colaboração e proteção ao titular no exercício das suas funções.

                             </span>
                             </div>

                             <div class="mt-3 d-flex justify-content-center align-items-center">
                               <p>{{$qrCodes}}</p>
                             </div>

                        </div> 
                        @endif
                          
                            @endif

                        @else
                      
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
@push('frente-verso')
<script>
  $(document).ready(function () {
   

      $('#verso').click(function (e) { 
        e.preventDefault();
        $('.frente').addClass('d-none');
        $('.verso').removeClass('d-none');
      });

      $('#frente').click(function (e) { 
        e.preventDefault();
        $('.frente').removeClass('d-none');
        $('.verso').addClass('d-none');
       
      });
    
  });
</script>
@endpush