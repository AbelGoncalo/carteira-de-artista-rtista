@extends('merge.casaeventos.forms.index')
@section('content')

<div class="container  ">
    <div class="p-3 rounded my-3" style="background-color:#3d2822;">
     <div class="d-flex justify-content-center">
         <!-- <img width="40" class="img-fluid" src="/assets/images/logotipo.png" alt=""> -->
     </div>
        <h4 class='text-white text-uppercase'>Formulário de cadastro de casa de eventos</h4>
    </div>

<!--  -->

    @if(session("errorCasaEvento"))
        <div class="col-md-12 text-center alert alert-danger">
            <span>{{session("errorCasaEvento")}}</span>
        </div>
    @endif

    <form method="POST" action="{{route('carteira.artista.store.house.of.event')}}" enctype="multipart/form-data">
      @csrf

        <div class="d-flex my-3 col-md-12 align-items-start">
                    <div class="col-md-6 me-2">
                            <div class="form-group">
                                <label for="" class="form-label">Nome da casa de eventos:</label>
                                <input placeholder="Digite o seu nome" type="text" name="nome" id="nome" class="form-control">
                                @error("nome") <span class="text-danger">{{$message}}</span>@enderror                                    
                                
                            </div>


                            <div class="form-group">
                                <label for="" class="form-label">Província:</label>
                                <select class='form-select' name="provincia" id="provincia">
                                    <option  selected disabled>-Selecionar-</option>
                                    <option value="Luanda">Luanda</option>
                                    <option value="Huambo">Huambo</option>
                                    <option value="Benguela">Benguela</option>
                                    <option value="Namibe">Namibe</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Município:</label>
                                <input placeholder="Digite o município" type="text" name="municipio" id="municipio" class="form-control">
                                @error("municipio") <span class="text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="form-group">
                                    <label for="" class="form-label">Bairro:</label>
                                    <input placeholder="Digite o bairro" type="text" name="bairro" id="bairro" class="form-control">
                                    @error("bairro") <span class="text-danger">{{$message}}</span>@enderror
                            </div>


                        <div class="form-group">
                            <label for="" class="form-label">Ponto de referência(opcional):</label>
                            <textarea class="form-control" name="ponto_referencia" id=""></textarea>
                            @error("ponto_referencia") <span class="text-danger">{{$message}}</span>@enderror
                        </div>



                    </div>

                    <div class="col-md-6 ">

                        <div class="form-group">
                                <label for="" class="form-label">Documento legalização do espaço(pdf/foto):</label>
                                <input multiple type="file" name="documentos[]" id="" class="form-control" >
                                @error("documentos") <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                            <div class="form-group">
                                <label for="" class="form-label">NIF:</label>
                                <input placeholder="Digite o seu NIF" type="text" name="nif" id="nif" class="form-control">
                                @error("nif") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                                    
                               

                            <div class="form-group">
                                <label for="" class="form-label">Telefone:</label>
                                <input placeholder="Digite o seu número de telefone" type="tel" name="telefone" id="telefone" class="form-control">
                                @error("telefone") <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                            <label for="" class="form-label">Foto ilustrativa do espaço:</label>
                            <input type="file" class="form-control" name="foto_ilustrativa_espaco" id="">
                            @error("foto_ilustrativa_espaco") <span class="text-danger">{{$message}}</span> @enderror
                            </div>



                            <!-- Hidden input -->
                    </div>


                </div>


                <!-- Dados de acesso -->
                <div class="col-md-12 ">
                    <hr>

                    <div class="form-group">
                        <h4 class="text-uppercase text-uppercase text-muted">Dados de acesso</h4>
                    </div>

                    <div class="d-flex align-items-start">

                        <div class="col-md-4 mx-1">
                            <div class="form-group">
                                <label for="" class="form-label">Email:</label>
                                <input placeholder="Digite o seu email" class="form-control" type="text" name="email">
                                @error("email") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>

                        <div class="col-md-4 mx-2">
                        <div class="form-group">
                                <label for="" class="form-label">Senha:</label>
                                <input placeholder="Digite a sua senha" type="password" name="password" id="" class="form-control">
                                @error("password") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>

                        <div class="col-md-3">

                        <div class="form-group">
                                <label for="" class="form-label">Confirmar senha:</label>
                                <input placeholder="Confirme a sua senha" type="password" name="confirm_password" id="" class="form-control">
                                @error("confirm_password") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>


                    </div>

                </div>
                <!-- Dados de acesso -->


            <div class="d-flex align-items-center form-group my-2">
                <button type="" class="mx-1 btn text-white" style='background: #3d2822;'>Salvar</button>
                <a class="btn btn-md text-white" style='background: #3d2822;' href="/">Página Inicial</a>
            </div>

</form>
</div>

@endsection

<script src="/assets/site/js/jquery-3.6.0.min.js"></script>
<script src="/assets/site/js/jquery-mask.js"></script>

<script>

 jQuery(function($){
        $(document).ready(() =>{            
            $('#nome').on('input', function() {
              var inputValue = $(this).val();
              var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
              $(this).val(newValue);
            });
            
            
            $('#municipio').on('input', function() {
              var inputValue = $(this).val();
              var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
              $(this).val(newValue);
            });
            
            $('#bairro').on('input', function() {
              var inputValue = $(this).val();
              var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
              $(this).val(newValue);
            });

            let propertiesbI = {
            placeholder: "000000000AA000",
            'translation':{
                A:{
                pattern: /[A-Z]/
            }

            }
        };

        $('#telefone').mask('000000000');
        $('#nif').mask('000000000AA000',propertiesbI);


        });
});



</script>


