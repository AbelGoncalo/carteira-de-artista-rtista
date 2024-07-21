
    <div data-backdrop='static' class="modal fade" id="solicitar-emissao-carteira" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-muted" id="exampleModalLabel">Deseja solicitar emissão de carteira?</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Clique em cancelar se deseja não prosseguir porém solicitar caso pretenda confirmar.</div>
            <div class="modal-footer border-0">
                <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method='post' action="{{route('carteira.artista.solicita.emissao.carteira')}}">
                 @csrf
                 
                    <button class="btn btn-sm btn-primary" type="submit" >Solicitar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
