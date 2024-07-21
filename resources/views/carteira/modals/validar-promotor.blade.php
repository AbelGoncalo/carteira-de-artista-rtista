<div data-backdrop='static' class="modal fade modal-center" id="validate_artist-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title h4" id="exampleModalLabel">Deseja realmente validar este promotor?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body border-0">
                <form  method="post" action="{{route('carteira.artista.validate.promotor',$user->id)}}">
                    @csrf
                    <div class="col-md-12">
                    
                        @method('POST')
                        <div class="d-flex align items-center my-2">
                            <button class="btn btn-secondary btn-sm mx-1" type="button" data-dismiss="modal">Cancelar</button>
                            <button type='submit' class="btn btn-primary btn-sm">Confirmar</button>
        
                        </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>
