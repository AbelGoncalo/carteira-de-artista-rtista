
    <!-- Logout Modal-->
    <div data-backdrop='static' class="modal fade" id="envio-comprovativo-pagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="card-header col-md-12" style="background: #3d2822">

                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                        <h4 class="h5  text-uppercase  text-white" >Selecione os artistas para enviar os convites</h4>
                    </div>
                </div>

                <div class="modal-body border-0">

                    <form action="{{route('carteira.artista.invite.artist.and.promoters')}}" method='POST'>
                            @csrf

                            <div class="d-flex col-md-12  algin-items-center">

                                <div class="form-group" style="width: 95%; margin-right: 1rem;">
                                    <label for="" class="form-label">Artsitas:</label>
                                    <select  id="artista-convite" class="form-control " multiple name="artista_id[]">
                                        <option  selected  disabled >Selecionar Artistas</option>
                                        @foreach($artistsToInvite as $artist)
                                            <option value="{{$artist->id}}">{{$artist->nome_completo ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group"  style="width: 100%">
                                    <label for="" class="form-label">Promotores de eventos:</label>
                                    <select id="promotor-convite" class="form-control" multiple name="promotor_id[]" >
                                        <option  selected disabled>Selecionar Promotores de Eventos</option>
                                        @foreach($promotersToInvite as $promotor)
                                            <option value="{{$promotor->id}}">{{$promotor->nome ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>                

                            </div>


                            

                            <div class="form-group">
                                <label for="">Evento:</label>
                                <select id="evento-convite" class="form-control" name="event_id" >
                                    <option value="" selected>Selecionar</option>                                    
                                    @foreach($events as $event)
                                        <option value="{{$event->id ?? ''}}" selected>{{$event->title ?? ''}}</option>
                                    @endforeach
                                </select>

                                <span class="text-danger">{{count($events) <= 0 ? 'Para poder enviar convites, crie primeiro um evento.' : '' }}</span>
                            </div>



                            
                            <div class="form-group ">
                                <button style="background:#3d2822" type="submit" class="{{count($events) <= 0 ? 'd-none' : '' }} btn text-light d-flex align-items-center">Enviar                               
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

  

