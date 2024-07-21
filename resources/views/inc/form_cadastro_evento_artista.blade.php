<div data-backdrop='static' class="modal fade" id="formSaveEventArtist" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog  modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class=" text-uppercase" >Adicionar evento</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body border-0">

                    <form action="{{route('carteira.artista.criar.evento')}}" method="post" >
                        @csrf
                        @method('post')
                        <input type="hidden" name="user_id">
                        <div class="form-group">
                            <label for="">Titulo:</label>
                            <input required placeholder="Digite o título do evento"  class="form-control" type="text" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="">Data e hora de Início:</label>
                            <input required type="datetime-local" class="form-control"  name="start" id="start">
                        </div>


                        <div class="form-group">
                            <label for="">Data e hora de Fim:</label>
                            <input required type="datetime-local" class="form-control"  name="end" id="end">
                        </div>


                        <div class="form-group d-flex justify-content-end">

                            <button style="background: #3d2822;"  type="button" id="button_submit" class="btn text-white">Salvar</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
