
    <!-- Logout Modal-->
    <div data-backdrop='static' class="modal fade" id="sendContrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="card-header col-md-12" style="background: #3d2822">

                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                        <h4 style="color: white !important" class="h5  text-uppercase text-muted text-white" >Faça o upload do contrato</h4>
                    </div>
                </div>

                <div class="modal-body border-0">

                    <form enctype="multipart/form-data" action="{{route('carteira.artista.send.contrato')}}" method='POST'>
                            @csrf

                            <div class="form-group">
                                <label for="" class="form-label">Artista:</label>
                                <select class="form-control" name="artista_id" id="artista-contrato">
                                    <option selected disabled>-Selecionar-</option>
                                    @foreach ($artistsAcceptedInvite as $artist)
                                        <option value="{{$artist->id}}" style="font-size: 17px !important">{{$artist->nome_completo ?? ''}} - Preço: {{$artist->preco ?? ''}}Kz </option>                                        
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="">Contrato para Artista:</label>
                                <input accept="application/pdf" type="file" name="anexo" id="" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Promotor de evento:</label>
                                <select class="form-control" name="promotor_id" id="promotor-contrato">
                                    <option value="">-Selecionar-</option>
                                    @foreach ($promotersAcceptedInvite as $promotor)
                                        <option value="{{$promotor->id}}" style="font-size: 17px !important">{{$promotor->nome ?? ''}} - Preço: {{$promotor->preco ?? ''}}Kz</option>                                        
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="">Contrato Promotor :</label>
                                <input accept="application/pdf" type="file" name="anexo" id="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Evento</label>
                                <select id="evento-contrato" class="form-control" name="event_id" >
                                    <option disabled selected>-Selecionar-</option>
                                    @foreach($events as $event)
                                        <option value="{{$event->id ?? ''}}">{{$event->title ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <button style="background:#3d2822" type="submit" class="d-flex align-items-center btn text-light ">Enviar
                                    <i class="ml-1 fa fa-regular fa-paper-plane"></i>
                                </button>
                                
                            </div>
                        </div>


                            </div>
                        </form>

                            

                    


                </div>

                </div>

            </div>
        </div>
    </div>

  

