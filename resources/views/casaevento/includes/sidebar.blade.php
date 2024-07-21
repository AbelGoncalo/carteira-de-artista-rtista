
        <!-- Sidebar -->
        <ul style="background: #3d2822 !important;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="d-flex  my-5 flex-column justify-content-center sidebar-brand d-flex align-items-center justify-content-center my-4" href="index.html">

                <div class="col-md-12 text-dark  mx-3 ">
                    <img width="30" src="/assets/images/logotipo.png" alt="">
                    <p class="text-light">Comissão da Carteira Profissional do Artista</p>

                </div>
            </a>


            <hr class="sidebar-divider my-3">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item active my-1">
                <a class="{{Route::currentRouteName() === 'carteira.artista.casa.evento.dashboard' ? 'bg-light rounded text-dark ' : ''}} nav-link " href="{{route('carteira.artista.casa.evento.dashboard')}}">
                    <i class="{{Route::currentRouteName() === 'carteira.artista.casa.evento.dashboard' ? 'text-dark' : ''}} fa fa-home"></i>
                    <span>Página inicial</span></a>
            </li>

            <li class="nav-item {{Route::currentRouteName() === 'carteira.artista.houes.of.events' ? ' text-dark' : ''}}  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.houes.of.events' ? 'rounded bg-light text-dark' : 'text-light'}} " href="{{route('carteira.artista.houes.of.events')}}">
                <i class="fa fa-solid text-white fa-house-user"></i>
                    <span>Casa de eventos</span></a>
            </li>         

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.form.invite.artista' || Route::currentRouteName() === 'carteira.artista.form.invite.artist' || Route::currentRouteName() === 'carteira.artista.show.calendar.artist' ?  'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.form.invite.artista')}}">
                <i class="fa fa-users"></i> 
                <span>Artistas</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.form.invite.event.promoter' ? 'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.form.invite.event.promoter')}}">
                <i class="fa {{Route::currentRouteName() === 'carteira.artista.form.invite.event.promoter' ? ' text-dark ' : ' fa-solid text-light'}} fa-user-tie"></i>
                <span>Promotores de eventos</span></a>
            </li>


            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.show.my.details' ? 'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.show.my.details')}}">
                <i class="fa {{Route::currentRouteName() === 'carteira.artista.show.my.details' ? 'text-dark' : 'fa-solid text-light'}} fa-lock"></i>
                <span>Meus detalhes</span></a>
            </li>
            
            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.sent.contratos' ? 'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.sent.contratos')}}">
                <i class="fa {{Route::currentRouteName() === 'carteira.artista.show.my.details' ? 'text-dark' : 'fa-solid text-light'}} fa-lock"></i>
                <span>Contratos</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->
