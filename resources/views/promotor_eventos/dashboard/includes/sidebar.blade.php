
        <!-- Sidebar -->
        <ul style="background: #3d2822 !important;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="d-flex  my-5 flex-column justify-content-center sidebar-brand d-flex align-items-center justify-content-center my-4" href="{{route('carteira.artista.promotor.eventos.dashboard')}}">

                <div class="col-md-12 text-dark  mx-3 ">
                    <img width="30" src="/assets/images/logotipo.png" alt="">
                    <p class="text-light">Comissão da Carteira Profissional do Artista</p>

                </div>
            </a>


            <hr class="sidebar-divider my-3">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item active my-1">
                <a class="{{Route::currentRouteName() === 'carteira.artista.promotor.eventos.dashboard' ? 'bg-light rounded text-dark ' : ''}} nav-link " href="{{route('carteira.artista.promotor.eventos.dashboard')}}">
                    <i class="{{Route::currentRouteName() === 'carteira.artista.promotor.eventos.dashboard' ? 'text-dark' : ''}} fa fa-home"></i>
                    <span>Página inicial</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promotor.meuperfil' ? 'bg-light rounded text-dark' : 'text-light' }}  " href="{{route('carteira.artista.promotor.meuperfil')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text- bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg>
                    <span>Meu Perfil</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promotor.list.casaEventos' ? 'bg-light rounded text-dark' : 'text-light' }} " href="{{route('carteira.artista.promotor.list.casaEventos')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                    </svg> 
                    <span>Casa de eventos</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promotor.list.artistas' ? 'bg-light rounded text-dark' : 'text-light' }}  " href="{{route('carteira.artista.promotor.list.artistas')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text- bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg>
                    <span>Artistas</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promotor.list.conviteAceites' ? 'bg-light rounded text-dark' : 'text-light' }}  " href="{{route('carteira.artista.promotor.list.conviteAceites')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                        </svg> 
                    <span>Convites</span></a>
            </li>

            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.list.contratos.promotor' ? 'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.list.contratos.promotor')}}">
                <i class="fa {{Route::currentRouteName() === 'carteira.artista.show.my.details' ? 'text-dark' : 'fa-solid text-light'}} fa-lock"></i>
                <span>Contratos</span></a>
            </li>
            
            <li class="nav-item active my-1">
                <a class="nav-link {{Route::currentRouteName() === 'carteira.artista.promotor.list.mensagens' ? 'bg-light text-dark rounded' : ''}}  rounded text-light" href="{{route('carteira.artista.promotor.list.mensagens')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="{{Route::currentRouteName() === 'carteira.artista.promotor.list.mensagens' ? 'text-dark' : ''}}  bi bi-chat-left-dots" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg> 
                <span>Mensagens</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->
