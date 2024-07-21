@extends("merge.artistas.forms.index")
@section('content')

<div class='container  col-md-6' style="margin-top:20vh">
    <h3 class="text-center text-uppercase" style='color:#3d2822;'>Processo de finalização de inscrição de promotor</h3>
    <span class='container d-flex justify-content-center'>Anexe o comprovativo no campo abaixo e confirme a submissão do ficheiro</span>

    <form method="post" action="{{route('carteira.artista.finish.send.details.of.payment.pdf.promotor',$id)}}" class="my-3" enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <input  accept="application/pdf" name='comprovativo' accept="pdf,docx" type="file" class='form-control' required />
        </div>

        <div class='form-group my-2 d'>
            <button type='submit' style="background: #3d2822;" class='btn text-white '>Enviar</button>
        </div>
    </form>

    @if(session("errReceptionPaimentReceipt"))
        <div class="alert alert-danger col-md-12 text-center">
            <span class="text-center">{{session('errReceptionPaimentReceipt')}}</span>
        </div>
    @endif
</div>


@endsection
