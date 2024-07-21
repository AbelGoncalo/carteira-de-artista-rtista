    <!-- Logout Modal-->

    <script src='/assets/site/jquery-3.6.0.min.js'></script>
    


    <div data-backdrop='static' class="modal fade" id="casaEventos" tabindex="-1" role="dialog" 
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class=" text-uppercase text-center" >casas de Eventos</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body border-0">
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead class="text-white text-uppercase" style="background: #3d2822;">
                                <tr>             
                                    <th>Nome</th>
                                    <th>Província</th>
                                    <th>Município</th>
                                    <th>Bairro</th>
                                    <th>Foto</th>
                                    <th>Opções</th>
                                </tr>

                            </thead>

                            <tbody>
                                @foreach($casa_eventos as $houses)
                                <tr>
                                    <td>Event house</td>
                                    <td>Luanda</td>
                                    <td>Belas</td>
                                    <td>dfifu</td>
                                    <td>dfifu</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                       
                                            <a style="background: #AB6364;" class="btn  btn-sm text-light" href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                                <span class="">ver calendário</span>
                                            </a>
                                        </div>
                                    </td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    
                </div>
            </div>
        </div>
    </div>

    <script>

        $('#buttonAddHouseEvents').click(() =>{
            $('#casaEventos').modal('hide')
        })
        // let casaEventos = document.getElementById("casaEventos");
        // let buttonAddHouseEvents = document.getElementById("buttonAddHouseEvents");
        // buttonAddHouseEvents.addEventListener("click", (rem) => {
        //     casaEventos.remove();
        // });


        
    </script>
