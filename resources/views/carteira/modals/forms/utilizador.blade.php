 <!-- Modal criar conta de utilizador admin da carteira -->

 <div data-backdrop='static' class="modal fade" id="formAddUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0">
                <div style="background: #3d2822;" class="modal-header border-0 text-white">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Preencha os dados de Acesso</h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body border-0">
                    <form method="POST" action="{{route('carteira.artista.store.user.admin.carteira')}}">
                        @csrf 

                        <div class="form-group">
                            <label for="" class="form-label">Nome:</label>
                            <input name="name" placeholder="Digite o nome " type="text" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="" class="form-label">Email:</label>
                            <input name="email" placeholder="Digite o email do usuário " type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Senha:</label>
                            <input name="password" placeholder="Digite a senha " type="password" class="form-control">
                        </div>
                        

                        <div class="form-group">
                            <button  class="btn text-white" style="background: #3d2822;" type="submit">Salvar</button>
                        </div>


                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
     <!-- End Modal criar conta de utilizador admin da carteira -->
