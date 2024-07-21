    <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none;" href="{{route('carteira.artista.pendent.artists')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Artistas Pendentes</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($pendentArtists) ? count($pendentArtists) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none;" href="{{route('carteira.artista.promoter.event.pendent')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Promotores de Eventos Pendentes</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($pendentPromoterEVents) ? count($pendentPromoterEVents) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>



                              <!-- Earnings (Monthly) Card Example -->
                              <div class="col-xl-3 col-md-6 mb-4">
                                <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.house.of.events.pendent')}}">
                                    <div class="card border-left-dark shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                        <h6>Casas de Eventos Pendentes</h6>
                                                    </div>
                                                    <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($pendentdHouseOfEvents) ? count($pendentdHouseOfEvents) : ''}}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a style="text-decoration: none;" class="text-dark" href="{{route('carteira.artista.see.all.messages')}}">
                            <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Mensagens</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto h3">{{isset($messages) ? count($messages) : ''}}</div>
                                            <!-- <i class="fa fa-users fa-3x text-dark"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>

                                  <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none" class="text-dark" href="{{route('carteira.artista.table.validated.artists')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Artistas Validados</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($validatedArtists) ? count($validatedArtists) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                          <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.table.validated.events.promoter')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Promotores de Eventos Validados</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($validatedPromotorEvents) ? count($validatedPromotorEvents) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>


                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.table.validated.house.events')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Casas de Eventos Validadas</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($validatedHouseOfEvents) ? count($validatedHouseOfEvents) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>




                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.list.users')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    <h6>Administradores / Carteira</h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($carteira_users) ? count($carteira_users) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.table.receipt.payment.pendent')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs  text-dark text-uppercase mb-1">
                                                    <p style="font-size:14px; text-transform: uppercase !important" class=" text-upercase">Validação de Comprovativos de Artistas</p>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($pendentPaymentReceip) ? count($pendentPaymentReceip) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        
                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.show.all.events')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs  text-dark text-uppercase mb-1">
                                                    <h6 class=" text-upercase">Consultar eventos </h6>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($allevents) ? count($allevents) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 



                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.table.receipt.payment.pendent.promotor')}}">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" text-xs  text-dark text-uppercase mb-1">
                                                    <p style="font-size:14px; text-transform: uppercase !important" class=" text-upercase">Validação de Comprovativos dos promotores</p>
                                                </div>
                                                <div class="h4 text-center mb-0 font-weight-bold text-gray-800">{{isset($pendentPaymentReceip) ? count($pendentPaymentReceip) : ''}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        
                        <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <a class="text-dark" style="text-decoration: none;" href="{{route('carteira.artista.show.all.calendars')}}">
                               <div class="card border-left-dark shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2 my-4">
                                               <div class=" text-xs  text-dark text-uppercase mb-1">
                                                   <h6 class=" text-upercase">Consultar calendarios </h6>
                                               </div>
                                               <div class="h4 text-center mb-0 font-weight-bold text-gray-800"></div>
                                           </div>
                                           <div class="col-auto">
                                               <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div> 
                       