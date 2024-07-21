<div data-backdrop='static' class="modal fade modal-center" id="novaMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div style="background: #3d2822;" class="modal-header border-0 ">
                    <h4 class="modal-title h4 text-white" id="exampleModalLabel">Enviar Mensagem</h4>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('carteira.artista.enviar.mensagem.todos')}}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="">Título</label>
                            <input placeholder="Digite o título da mensagem" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <select name="destinatario" class="form-control" id="">
                             <option value="Todos">Todos</option>
                            </select>
                         </div>
                        
                        <div class="form-group">
                            <label for="" class="form-label">Mensagem:</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
    
                       
    
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary btn-sm" type="submit">Enviar</button>
                    </div>

                    </form>

                    

            </div>
        </div>
    </div>
