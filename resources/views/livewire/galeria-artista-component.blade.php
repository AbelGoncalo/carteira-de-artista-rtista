<div>

@include('artistas.galeria._script')
    <!-- Gallery -->
<section class="container content mb-4 mt-5">

   
    <div class="img-container">
        @if (isset($galeriaArtista) and $galeriaArtista->count() > 0)
         @foreach ($galeriaArtista as $item)
      
         
         <div class="image ">
             <p class="badge badge-danger badge-pill" style="cursor: pointer" wire:click='excluir({{$item->id}})'><i class="fa fa-times"></i></p>
        
            <img title="Clicar para ver imagem completa" src="{{asset('/storage/fotos/'.$item->foto)}}" alt="Fotografia da galeria do artista">
        </div>
         @endforeach
     @else
       
        <div class="col-md-12 d-flex justify-content-center align-items-center flex-column" style="height: 25vh">
            <i class="fa fa-5x fa-caret-down text-muted"></i>
            <p class="text-muted">Nenhum Foto na Galeria</p>
        </div>
     
     @endif
    </div>
    <div class="popup-image">
        <span>&times;</span>
        <div class="image"><img src="{{asset('/storage/fotos/')}}" alt="Fotografia selecionada da galeria do artista"></div>
    </div>
 
</section>
<!-- Gallery End -->

@include('artistas.galeria.script')
@include('artistas.galeria.modal')
</div>
