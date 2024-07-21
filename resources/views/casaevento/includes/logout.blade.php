   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-muted h4" id="exampleModalLabel">Deseja realmente terminar sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique em cancelar se deseja permanecer conectado ou sim para terminar a sua sessão.</div>
                <div class="modal-footer border-0">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-sm btn-primary" href="{{route('logout')}}">Terminar sessão</a>
                </div>
            </div>
        </div>
    </div>