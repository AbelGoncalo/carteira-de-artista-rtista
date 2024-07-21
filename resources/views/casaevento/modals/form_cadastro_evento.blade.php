    <!-- Logout Modal-->
    <div data-backdrop='static' class="modal fade" id="eventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="card-header col-md-12" style="background: #;">

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                        <h4 class="h5  text-uppercase  text-muted" >Preencha o formulário de cadastro da casa de eventos</h4>
                    </div>
                </div>

                <div class="modal-body border-0">

            <form action="{{route('carteira.artista.save.calendar.house.event')}}" method='POST'>
                @csrf

            <div class="col-md-12 d-flex align-items-start">


             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome do espaço:</label>
                                    <input placeholder="Digite o nome da casa de evento" class="form-control" type="text" name="nome">
                                </div>

                                <div class="form-group">
                                    <label for="">Província:</label>
                                    <select class="form-control" name="provincia" id="">
                                        <option value="Luanda">Luanda</option>
                                        <option value="Huambo">Huambo</option>
                                        <option value="Benguela">Benguela</option>
                                        <option value="Lobito">Lobito</option>
                                        <option value="Bié">Bié</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Município:</label>
                                    <input class="form-control" type="text" name="municipio" placeholder="Digite o município" />
                                </div>

                                <div class="form-group">
                                    <label for="">Foto ilustrativa do espaço:</label>
                                    <input class="form-control" type="file" name="foto_iltustrativa_espaco">
                                </div>

             </div>

            <div class="col-md-6">

                            <div class="form-group">
                                    <label for="">Bairro:</label>
                                    <input class="form-control" type="text" placeholder="Digite o bairro" name="bairro">
                                </div>

                                <div class="form-group">
                                <label for="" class="form-label">Documentos legalização do espaço(pdf/foto):</label>
                                <input multiple type="file" name="documentos[]" id="" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Ponto de referência:</label>
                                    <textarea name="ponto_referencia" id="" class="form-control" placeholder="dhfd">
                                    </textarea>
                                </div>

            </div>

        </div>
        
        <div class="form-group container">
            <button style="background:#3d2822" type="submit" class="btn text-light mx-2">Salvar</button>
        </div>

            </form>

                </div>

                </div>

            </div>
        </div>
    </div>



