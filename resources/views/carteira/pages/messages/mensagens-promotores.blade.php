@include('carteira.includes.header')
@include('carteira.modals.nova-mensagem')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('carteira.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('carteira.includes.top-bar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <div class="row">

                        <div class="col-md-12">
                           

                            <div class="card shadow">
                                @if(session("allMessageSentToUsers"))
                                <div  class="d-flex my-2 text-center alert alert-success col-md-12">
                                    <p class="text-center container ">{{session("allMessageSentToUsers")}}</p>
                            </div>
                                @endif

                                <div style="background: #3d2822;" class="card-header text-light">
                                    <h4>Mensagens</h4>
                                </div>

                                <div class="card-body">

                                    <!-- Filtros-->
                                    @include('carteira.pages.messages.find.filter-messages')

                                    <!-- Filtros-->
                                    
                                    
                                    @if(isset($allmessagesForPromoters))
                                        @if(count($allmessagesForPromoters) < 1) 
                                            <div class="alert alert-warning col-md-12 text-center">
                                                <span>Nenhuma mensagem disponível</span>
                                            </div>
                                        @endif
                                    @foreach($allmessagesForPromoters as $messages)
                                        <div class="d-flex mb-2 flex-column">

                                            <div class="d-flex align-items-start mb-2">
                                                <img class="img-fluid" width='40' src='/assets/admin/img/undraw_profile.svg' />
                                                <span class='h6 text-uppercase mx-3 my-1 font-weight-bold'>Promotor de eventos: <span style="font-weight: bold !important">{{$messages->nome ?? ''}}</span></span>

                                            </div>

                                            <div class="">
                                                <div class=' d-flex flex-column '>
                                                    <h6 class=" font-weight-bold text-muted ">Título: {{isset($messages->title) ?  $messages->title : ''}}</h6>

                                                    <span style='font-size:14px !important'>{{$messages->email ?? ''}}</span>
                                                </div>


                                                <div class="d-flex align-items-start">
                                                    <p class=""> {{$messages->message ?? ''}}</p>
                                                    
                                                </div>

                                                <div class=" d-flex " style="font-size: 13px">
                                                    <span class="mx-1" >DATA:</span> <span>{{$messages->created_at}}</span>
                                                </div>


                                            </div>

                                        </div>
                                            <hr>
                                        @endforeach
                                    @endif

                                        <div class="d-flex align-items-center">
                                            {{isset($allmessagesForArtists) ? $allmessagesForArtists->links() : '' }}

                                        </div>
                                </div>


                            </div>

                        </div>



                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

     @include('carteira.includes.footer') 

