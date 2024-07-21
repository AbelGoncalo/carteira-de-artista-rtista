
    <!-- Logout Modal-->
    <div data-backdrop='static' class="modal fade" id="detail-invites" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header  border-0">
                    <div class="card-header  col-md-12" style="background: #3d2822">

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                        <h4 class="h5 text-uppercase  text-white" >Informações detalhadas sobre os eventos solicitados</h4>
                    </div>
                </div>

                <div class="modal-body border-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class=" text-white" style="background:#3d2822">
                                <tr>
                                    <th>Id</th>
                                    <th>Nota de convite</th>
                                    <th>Artista</th>
                                    <th>Promotor de evento</th>
                                    <th>Evento</th>
                                    <th>Data/hora de inicio</th>
                                    <th>Data/hora de término</th>
                                    <th>Estado</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($invites as $invite)
                                    <tr>
                                        <td>{{$invite->id ?? ''}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>        


                </div>

            </div>


        </div>

       

                </div>

                </div>

            </div>
        </div>
    </div>




