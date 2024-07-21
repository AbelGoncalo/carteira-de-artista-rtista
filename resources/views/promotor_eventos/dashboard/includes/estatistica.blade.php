<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.promotor.list.casaEventos')}}">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                            <h5 class="h6 text-dark ">Casa de Eventos</h5>
                        </div>
                        <div class="h3 text-center mb-0 font-weight-bold text-gray-800">{{count($casa_eventos) ?? ''}}</div>
                    </div>
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                        </svg>                                       
                    </div>
                </div>
            </div>
        </div>

    </a>
</div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.promotor.list.artistas')}}">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h5 class="h6 text-dark">Artistas</h5>
                                            </div>
                                            <div class="h3 text-center mb-0 font-weight-bold text-gray-800">{{count($artistas) ?? ''}}</div>
                                        </div>
                                        <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="text-dark bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        </svg>
                                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.promotor.list.conviteAceites')}}">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h5 class="h6 text-dark">Convites</h5>
                                            </div>
                                            <div class="h3 text-center mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                        </svg>                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div data-toggle="modal" data-target="#sendContrato" class="col-xl-3 col-md-6 mb-4">
                            <a href="#" style="text-decoration: none; ">
                                <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h5 class="h6 text-dark ">Envio de contratos</h5>
                                            </div>
                                            <div class="h3 text-center mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="text-dark fa fa-regular fa-paper-plane fa-3x"></i>
                                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                            


                        <div  class="col-xl-3 col-md-6 mb-4">
                            <a href="{{route("carteira.artista.list.contratos.promotor")}}" style="text-decoration: none; ">
                                <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6 class="h6 text-dark ">Contratos recebidos</h6>
                                            </div>
                                            <div class="h3 text-center mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="text-dark fa fa-regular fa-file fa-3x"></i>
                                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div> 

                        <div  class="col-xl-3 col-md-6 mb-4">
                            <a data-toggle="modal" data-target="#envio-comprovativo-pagamento" href="{{route("carteira.artista.sent.contratos")}}" style="text-decoration: none; ">
                                <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6 class="h6 text-dark ">Envio de comprovativos </h6>
                                            </div>
                                            <div class="h3 text-center mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="text-dark fa fa-solid fa-file-import fa-3x"></i>
                                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>   
                        
                       

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none;" href="{{route('carteira.artista.promotor.list.mensagens')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <h5 class="h6 text-dark ">Fale connosco</h5>
                                                </div>
                                                <div class="h3 text-center mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="text-dark bi bi-chat-left-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg>                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </div>