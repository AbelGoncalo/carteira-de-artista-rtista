  <!-- Filtros-->
  <div class="d-flex align-items-center flex-wrap mb-4">
    <a data-toggle="modal" data-target="#novaMensagem" class="btn btn-sm btn-success mx-1" href="">Nova mensagem</a>
    <a style="{{Route::currentRouteName() ===  'carteira.artista.see.all.messages' ? 'background: #3d2822;' : '' }}" class="{{Route::currentRouteName() === "carteira.artista.see.all.messages" ? 'btn text-white' : 'btn btn-primary'}} btn btn-sm mx-1" href="{{route('carteira.artista.see.all.messages')}}">Todas</a>
    <a style="{{Route::currentRouteName() ===  'carteira.artista.messages.artistas' ? 'background: #3d2822;' : '' }}" class="btn btn-sm {{Route::currentRouteName() === 'carteira.artista.messages.artistas' ? 'text-white' : 'btn btn-primary'}} mx-1" href="{{route('carteira.artista.messages.artistas')}}">Artistas</a>
    <a style="{{Route::currentRouteName() ===  'carteira.artista.messages.promoters' ? 'background: #3d2822;' : '' }}" class="btn btn-sm {{Route::currentRouteName() === 'carteira.artista.messages.promoters' ? 'text-white' : 'btn btn-primary'}} mx-1" href="{{route('carteira.artista.messages.promoters')}}">Promototores</a>
    <a style="{{Route::currentRouteName() ===  'carteira.artista.messages.house.of.events' ? 'background: #3d2822;' : '' }}" class="btn btn-sm {{Route::currentRouteName() === 'carteira.artista.messages.house.of.events' ? 'text-white' : 'btn btn-primary'}} mx-1" href="{{route('carteira.artista.messages.house.of.events')}}">Casa de eventos</a>
</div> 
<!-- Filtros-->