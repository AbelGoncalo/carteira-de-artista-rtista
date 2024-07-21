
    <!-- Logout Modal-->
    <div data-backdrop='static' class="modal fade" id="sendInvitationEventPromoter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="card-header col-md-12" style="background: #3d2822">

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                        <h4 class="h5  text-uppercase  text-white" >Selecione os promotores de eventos para enviar o convite</h4>
                    </div>
                </div>

                <div class="modal-body border-0">

        <form action="{{route('carteira.artista.invite.promotor.events')}}" method='POST'>
                @csrf

            <div class="form-group">

                <select style="width: 100%;"  multiple name="promotor_evento_id[]" id="promoter">
                    <option selected disabled>Selecionar Promotor de evento</option>
                    @foreach($promotor_eventos as $promotor)
                        <option value="{{$promotor->id}}">{{$promotor->name ?? ''}}</option>
                    @endforeach
                </select>

                <div class="form-group my-3">
                    <label for="" class="form-label">Digite o texto referente ao convite </label>
                    <textarea class="form-control" name="texto"  rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Evento</label>
                    <select class="form-control" name="event_id" id="">
                        <option value="" selected>Selecionar</option>
                        @foreach($events as $event)
                            <option value="{{$event->id ?? ''}}" selected>{{$event->title ?? ''}}</option>
                        @endforeach
                    </select>

                </div>

            </div>


        </div>

        <div class="form-group container">
            <button style="background:#3d2822" type="submit" class="btn text-light mx-2">Salvar</button>
        </div>

     </form>

                </div>

                </div>

            </div>
        </div>
    </div>




