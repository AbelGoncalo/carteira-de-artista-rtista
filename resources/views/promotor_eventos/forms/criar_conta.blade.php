@extends("merge.promotor_eventos.forms.index")
@section("content")

<div class="px-4 ">
    <div class="p-3 rounded my-3" style="background-color:#3d2822;">
     <div class="d-flex justify-content-center">
         <!-- <img width="40" class="img-fluid" src="/assets/images/logotipo.png" alt=""> -->
     </div>
        <h4 class='text-white text-uppercase'>Formulário de cadastro de promotores de eventos</h4>
</div>

<!--  -->

    @if(session("catch"))
        <div class="alert alert-danger">
            <span>{{session("catch")}}</span>
        </div>
    @endif

    <form method="POST" action="{{route('carteira.artista.promotor.eventos.store.account')}}" enctype="multipart/form-data">
      @csrf

        <div class="d-flex my-3 col-md-12 align-items-start ">
                    <div class="col-md-6 me-2">
                            <div class="form-group">
                                <label for="" class="form-label">Nome completo:</label>
                                <input placeholder="Digite o seu nome" type="text" name="nome" id="nome" class="form-control">
                                @error("nome") <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Data de nascimento:</label>
                                <input type="date" name="data_nascimento" id="" class="form-control">
                                @error("data_nascimento") <span class="text-danger">{{$message}}</span> @enderror
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">País:</label>
                                <select class='form-select' name="pais" id="pais">
                                    <option value="" selected disabled>--Selecionar--</option>
                                    @if(isset($countries))
                                    @foreach($countries as $country)
                                    <option value="{{$country ?? ''}}">{{$country ?? ''}}</option>
                                    @endforeach
                                    
                                    @endif
                                </select>
                                @error("pais") <span class="text-danger">{{$message}}</span> @enderror
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Província:</label>
                                <select class='form-select' name="provincia" id="provincia">
                                    <option value="" selected disabled>--Selecionar--</option>
                                    <option value="Luanda">Luanda</option>
                                    <option value="Huambo">Huambo</option>
                                    <option value="Benguela">Benguela</option>
                                    <option value="Namibe">Namibe</option>
                                </select>
                                @error("provincia") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Município:</label>
                                <input placeholder="Digite o município" type="text" name="municipio" id="municipio" class="form-control">
                                @error("municipio") <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Bairro:</label>
                                <input placeholder="Digite o bairro" type="text" name="bairro" id="bairro" class="form-control">
                                @error("bairro") <span class="text-danger">{{$message}}</span> @enderror
                            </div>





                    </div>

                    <div class="col-md-6 ">

                        <div class="form-group">
                            <label for="" class="form-label">Código postal(opcional):</label>
                            <input placeholder="Digite o código postal" type="text" name="codigo_postal" id="" class="form-control">
                            @error("codigo_postal") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="form-label">Bilhete de identidade(pdf/foto):</label>
                            <input type="file" name="bilhete_identidade_anexo" id="bilhete_identidade_anexo" class="form-control">
                            @error("bilhete_identidade_anexo") <span class="text-danger">{{$message}}</span> @enderror
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
                            <label for="" class="form-label">Ponto de referência(opcional):</label>
                            <textarea class="form-control" name="referencia" id=""></textarea>
                            @error("referencia") <span class="text-danger">{{$message}}</span> @enderror
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
                                <input placeholder="Digite a sua senha" type="password" name="password" id="password" class="form-control">
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

        <div class="d-flex align-items-center form-group my-1">
            <button type="submit" class="btn btn-md text-white mx-1" style='background: #3d2822;'>Salvar</button>
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

            $('#provincia').on('input', function() {
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

            $('#telefone').mask('000000000');


            let propertiesbI = {
            placeholder: "000000000AA000",
            'translation':{
                A:{
                pattern: /[A-Z]/
            }

            }
        };
        
        $('#nif').mask('000000000AA000',propertiesbI);



            













    });
    });
</script>





