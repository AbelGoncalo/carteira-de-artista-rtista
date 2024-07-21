<div data-backdrop='static' class="modal fade modal-center" id="delete_user-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title h4" id="exampleModalLabel">Deseja realmente eliminar este usuário?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecione a opção cancelar se desejar cancelar a operação e confirmar para concluir</div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                <form  method="post" action="{{route('carteira.artista.delete.user.admin',$user->id)}}">
                @csrf
                @method('POST')
                    <button type='submit' class="btn btn-danger btn-sm">Confirmar</button>
                </form>

            </div>
        </div>
    </div>
</div>