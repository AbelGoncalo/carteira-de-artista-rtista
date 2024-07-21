   <!-- Logout Modal-->
   <div class="modal fade" id="rejeitar-{{$convite->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja rejeitar o convite?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique em cancelar se deseja permanecer pendente.</div>
                <div class="modal-footer border-0">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                    <form action="{{route('carteira.artista.promotor.rejeitarconvite',$convite->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="btn btn-primary" >Sim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>