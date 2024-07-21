@extends("merge.artistas.forms.index")
@section('content')



    <div class="container">
        <div class="card shadow rounded mt-3">
            <div class="card-header text-light" style='background: #3d2822;'>
                <h5 class="mb-2 mt-2 text-uppercase text-center">Requisitos Necessarios Para Obtenção Da Carteira Profissional de Artista</h5>
            </div>
           <div class="card-body">

        <div class="container">
            <form class="row" action="{{route('carteira.artista.enviar.dados')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group mt-2 col-md-3">
                    <label for="nome_completo">Nome Completo <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('nome_completo')}}" type="text" class="form-control  @error('nome_completo') is-invalid @enderror" id="nome_completo" name="nome_completo" placeholder="Informe seu nome">
                    @error('nome_completo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="nome_completo">Nome Artistico <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('nome_artistico')}}" type="text" class="form-control  @error('nome_artistico') is-invalid @enderror" id="nome_artistico" name="nome_artistico" placeholder="Informe seu nome artístico">
                    @error('nome_artistico') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="nome_pai">Categoria <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <select class="form-select" name="categoria" id="">
                        <option value="Músico">Músico</option>
                        <option value="Artista plástico">Artista plástico</option>
                        <option value="Director artístico">Director artístico</option>
                        </select>                    
                </div>

                <div class="form-group  col-md-3">
                    <label style="" for="nome_pai">Foto tipo-passe<span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('foto_meio_corpo')}}" type="file" class="form-control  @error('foto_meio_corpo') is-invalid @enderror" id="foto_meio_corpo" name="foto_meio_corpo" >
                    @error('foto_meio_corpo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>


                <div class="form-group mt-2 col-md-3">
                    <label for="nome_pai">Nome do Pai <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('nome_pai')}}" type="text" class="form-control  @error('nome_pai') is-invalid @enderror" id="nome_pai" name="nome_pai" placeholder="Informe o nome do Pai">
                    @error('nome_pai') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="nome_mae">Nome da Mãe <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('nome_mae')}}" type="text" class="form-control  @error('nome_mae') is-invalid @enderror" id="nome_mae" name="nome_mae" placeholder="Informe nome da Mãe">
                    @error('nome_mae') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="data_nascimento">Data de Nascimento <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('data_nascimento')}}" type="date" class="form-control  @error('data_nascimento') is-invalid @enderror" id="data_nascimento" name="data_nascimento">
                    @error('data_nascimento') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="nacionalidade">Nacionalidade <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <select  value="{{old('nacionalidade')}}" name="nacionalidade" id="nacionalidade" class="form-select @error('nacionalidade') is-invalid @enderror"  >
                       <option value="" selected>--Selecionar--</option>
                         @if(isset($paises) and count($paises) > 0)
                            @foreach ($paises as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        @else
                        <option value="Angola">Angola</option>
                       <option value="Brasil">Brasil</option>
                       <option value="Portugal">Portugal</option>

                        @endif

                    </select>
                    @error('nacionalidade') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="naturalidade">Naturalidade <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <input value="{{old('naturalidade')}}" type="text" class="form-control  @error('naturalidade') is-invalid @enderror" id="naturalidade" name="naturalidade" placeholder="Informe sua Naturalidade">
                    @error('naturalidade') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="genero">Gênero <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <select  name="genero" id="genero" class="form-select @error('genero') is-invalid @enderror"  >
                      <option value="">--Selecional--</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Prefiro Não Informar">Prefiro Não Informar</option>
                    </select>
                    @error('genero') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="estado_civil">Estado Cívil <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                    <select  name="estado_civil" id="estado_civil" class="form-select @error('estado_civil') is-invalid @enderror"  >
                      <option value="">--Selecional--</option>
                      <option value="Casado(a)">Casado(a)</option>
                      <option value="Solteiro(a)">Solteiro(a)</option>
                      <option value="Divorciado(a)">Divorciado(a)</option>
                      <option value="Viuvo(a)">Viuvo(a)</option>
                    </select>
                    @error('estado_civil') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>
                <div class="form-group mt-2 col-md-3">
                    <label for="numero_bi">Nº BI <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('numero_bi')}}" type="text" class="form-control  @error('numero_bi') is-invalid @enderror" id="numero_bi" name="numero_bi" placeholder="Informe o nº do seu BI">
                @error('numero_bi') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-3">
                <label for="telefone">Telefone <span class="text-danger text-sm " style="font-size:10px">*</span></label>
            <input  type="tel" onkeypress="$(this).mask('999-999-999')" class="form-control  @error('telefone') is-invalid @enderror" id="telefone" name="telefone" placeholder="Informe seu número de telefone">
            @error('telefone') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
        </div>
                <div class="form-group mt-2 col-md-3">
                        <label for="telefone_alternativo">Telefone Alternativo</label>
                    <input onkeypress="$(this).mask('999-999-999')" value="{{old('telefone_alternativo')}}" type="tel" class="form-control  @error('telefone_alternativo') is-invalid @enderror" id="telefone_alternativo" name="telefone_alternativo" placeholder="Informe seu telefone">
                    @error('telefone_alternativo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
                </div>


            <div class="form-group mt-2 col-md-3">
                <label for="numero_bi">BI <span class="text-danger text-sm " style="font-size:10px">*</span></label>
            <input value="{{old('bi_anexo')}}" type="file" accept="pdf,docx" class="form-control  @error('bi_anexo') is-invalid @enderror" id="bi_anexo" name="bi_anexo">
            @error('bi_anexo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
        </div>
            <div class="form-group mt-2 col-md-4">
                <label for="historial_artistico_anexo">Historial Artístico <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('historial_artistico_anexo')}}" type="file" accept="pdf,docx" class="form-control  @error('historial_artistico_anexo') is-invalid @enderror" id="historial_artistico_anexo" name="historial_artistico_anexo">
                @error('historial_artistico_anexo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-4">
                <label for="declaracao_compromisso_honra_anexo">Declaração de compromisso e  Honra <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input type="file" accept="pdf,docx" class="form-control  @error('declaracao_compromisso_honra_anexo') is-invalid @enderror" id="declaracao_compromisso_honra_anexo" name="declaracao_compromisso_honra_anexo">
                @error('declaracao_compromisso_honra_anexo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-4">
                <label for="doc_filiacao_associacao_artista_anexo">Documento de Associação Artistica <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('doc_filiacao_associacao_artista_anexo')}}" type="file" accept="pdf,docx" class="form-control  @error('doc_filiacao_associacao_artista_anexo') is-invalid @enderror" id="doc_filiacao_associacao_artista_anexo" name="doc_filiacao_associacao_artista_anexo">
                @error('doc_filiacao_associacao_artista_anexo') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-4">
            <label for="fotos_palco">Fotos em Palco <span class="text-danger text-sm " style="font-size:10px">*</span></label>
            <input value="{{old('fotos_palco')}}" multiple="multiple" type="file" accept="jpeg,jpg,png,gif" class="form-control  @error('fotos_palco[]') is-invalid @enderror" id="fotos_palco[]" name="fotos_palco[]">
            @error('fotos_palco[]') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-8">
                <label for="endereco">Endereço <span class="text-danger text-sm " style="font-size:10px">*</span></label>
            <input value="{{old('endereco')}}" type="text" class="form-control  @error('endereco') is-invalid @enderror" id="endereco" name="endereco" placeholder="Provincia, Município, Bairro e Rua...">
            @error('endereco') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
        </div>
        <div class="form-group mt-2 col-md-12">
            <hr>
             <h5 class="text-muted">DADOS DE ACESSO</h5>
            <hr>
        </div>
            <div class="form-group mt-2 col-md-4">
                <label for="email">E-mail <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('email')}}" type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Informe seu email">
                @error('email') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-4">
                <label for="password">Senha <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('password')}}" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="********">
                @error('password') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>
            <div class="form-group mt-2 col-md-4">
                <label for="cpassword">Senha <span class="text-danger text-sm " style="font-size:10px">*</span></label>
                <input value="{{old('cpassword')}}" type="password" class="form-control  @error('cpassword') is-invalid @enderror" id="cpassword" name="cpassword" placeholder="********">
                @error('cpassword') <span class="text-danger text-sm " style="font-size:10px">{{$message}}</span> @enderror
            </div>

            <div class="form-group mt-2 col-md-12 text-end">
                <a href="/" class="btn btn-md text-white" style='background: #3d2822;'>Página Inícial <i class="bi bi-home"></i></a>
                <button class="btn btn-md text-white" style='background: #3d2822;'>Enviar Inscrição <i class="bi bi-send"></i></button>
            </div>
            </form>
        </div>
        </div>
        </div>
    </div>

 @push('script-formulario-artistas')
    <script>
        $(document).ready(function () {

            $('#nacionalidade').select2({
                theme: 'bootstrap4',
                width:'100%'
             });
        });

    </script>
    @endpush

    <script src="/assets/site/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/site/js/jquery-mask.js"></script>


    <script>
        //JQuery Mask

        jQuery(function($){
            $(document).ready(() =>{

                $('#nome_completo').on('input', function() {
                var inputValue = $(this).val();
                var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
                $(this).val(newValue);
                });

                $('#nome_artistico').on('input', function() {
                var inputValue = $(this).val();
                var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
                $(this).val(newValue);
                });

                $('#nome_pai').on('input', function() {
                var inputValue = $(this).val();
                var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
                $(this).val(newValue);
                });


                $('#nome_mae').on('input', function() {
                var inputValue = $(this).val();
                var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
                $(this).val(newValue);
                });

                $('#naturalidade').on('input', function() {
                var inputValue = $(this).val();
                var newValue = inputValue.replace(/[^a-zA-Z\s\-\á\Á\à\À\ñ\Ñ\.\ã\ç\ó\Ó\é\É\\]/g, '');
                $(this).val(newValue);
                });

                $('#telefone').mask('000000000');
                $('#telefone_alternativo').mask('000000000');


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
            $('#numero_bi').mask('000000000AA000',propertiesbI);


            });
        });

    </script>



@endsection
