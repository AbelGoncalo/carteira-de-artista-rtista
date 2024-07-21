<ul style="background: #3d2822 !important;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="d-flex  my-5 flex-column justify-content-center sidebar-brand d-flex align-items-center justify-content-center my-4" href="index.html">

                <div class=" bg-light col-md-12 text-dark sidebar-brand-text mx-3 ">
                    <p>Comissão da Carteira Profissional do Artista</p>
                    <img width="30" src="/assets/images/logotipo.png" alt="">

                </div>
            </a>

            <hr class="sidebar-divider my-3">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.admin.dashboard' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.admin.dashboard')}}">
                    <i class="fa fa-home text-dark"></i>
                    <span>Página inicial</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.list.users' ? 'rounded bg-light text-dark' : 'text-light'}} " href="{{route('carteira.artista.list.users')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Administradores/carteira</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.see.all.messages' || Route::currentRouteName()  === 'carteira.artista.messages.artistas' || Route::currentRouteName() === 'carteira.artista.messages.promoters' || Route::currentRouteName() === 'carteira.artista.messages.house.of.events' || Route::currentRouteName() === 'carteira.artista.messages.promoters' ? 'rounded bg-light text-dark' : 'text-light'}}  " href="{{route('carteira.artista.see.all.messages')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Mensagens</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.pendent.artists' || Route::currentRouteName() === 'carteira.artista.table.validated.artists' || Route::currentRouteName() === 'carteira.artista.artists.without.carteira' ? 'rounded bg-light text-dark' : 'text-light'}}  " href="{{route('carteira.artista.pendent.artists')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Artistas</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promoter.event.pendent' || Route::currentRouteName() === 'carteira.artista.table.validated.events.promoter' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.promoter.event.pendent')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Promotores de Eventos</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.house.of.events.pendent' || Route::currentRouteName() === 'carteira.artista.list.calendar' || Route::currentRouteName() === 'carteira.artista.show.all.calendars' || Route::currentRouteName() === 'carteira.artista.table.validated.house.events' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.house.of.events.pendent')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Casas de Eventos</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.table.receipt.payment.pendent' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.table.receipt.payment.pendent')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Comprovativos de pagamento</span></a>
            </li>

            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.table.receipt.payment.pendent.promotor' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.table.receipt.payment.pendent.promotor')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Comprov. dos promotores</span></a>
            </li>


            <li class="nav-item  my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.show.all.events' ? 'rounded bg-light text-dark' : 'text-light'}}" href="{{route('carteira.artista.show.all.events')}}">
                    <i class="fa fa-users text-light"></i>
                    <span>Consultar eventos</span></a>
            </li>

            


</ul>
