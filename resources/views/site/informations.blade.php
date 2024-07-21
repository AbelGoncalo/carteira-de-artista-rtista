@extends('merge.site.informations')
@section('content')

    <main class="container my-5">
        <div class="col-md-12 d-flex align-items-start">
            <div class="row">
                <div class="col-md-6">
                    <div class="" style="margin-top:10rem !important">
                        <h1 style="color:#3d2822" class="">Seja muito bem vindo a<br> Carteira Profissional do Artista</h1>
                        <h3 class="text-dark">Siga os passos abaixo para criar a carteira</h3>
                    </div>
                </div>
    
                <div class="col-md-6 text-center d-flex align-items-center justify-content-end">
                    <img style="width:400px" src="/assets/images/hero.png" alt="">
                </div>    
            </div>
        </div>

        <section class="section-1 container" style="margin-top: 20px">
            <h2 class="text-center" style="color: #3d2822">Instruções para criação da carteira</h2>
            <div class="col-md-12 d-flex align-items-center mt-5">
                <div class="row">
                    <div class="col-md-4 my-1">
                        <div class="step text-center">
                            <img src="{{asset("assets/images/step1.png")}}" alt="" width="200px">
                        </div>
                        <div class="text">
                            <p class="lead text-center fs-6">Vá para o menu inscrição e selecione a opção correspondente ao seu perfil</p>
                        </div>
                    </div>

                    <div class="col-md-4 my-1">
                        <div class="step text-center" >
                            <img src="{{asset("assets/images/ste_2.png")}}" alt="" width="200px">
                        </div>
                        <div class="text">
                            <p class="lead text-center fs-6">Preencha o formulário com os seus dados pessoais e artisicos</p>
                        </div>
                    </div>

                    <div class="col-md-4 my-1">
                        <div class="step text-center" >
                            <img src="{{asset("assets/images/step_3.png")}}" alt="" width="200px">
                        </div>
                        <div class="text">
                            <p class="lead text-center fs-6">Aguarde a confirmação sobre a criação
                                da sua carteira no seu email.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section container py-5">
            <div class="col-md-12 d-flex justify-content-center container align-items-center" >
                <video class="container" src="/assets/images/usasr.mp4" controls style="width: 80%; border-radius: 40px">
                    <source src="" type="mp4">
                </video>
            </div>
        </section>
    </main>

     <!-- footer -->

     <footer id="contacts" class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="/assets/images/logo.png" alt="" class="img-fluid">
                        </div>
                        <div style="color: #3d2822">
                          <p>EXISTIMOS PARA PERMITIR UM FUTURO MELHOR PARA OS ARTISTAS
                            ANGOLANOS.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Serviços</h4>
                        <div class="divider mb-4"></div>
  
                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Carteira Digital</a></li>
                            <li><a href="#!">Profissionalismo</a></li>
                            <li><a href="#!">Marcações de eventos</a></li>
                            <li><a href="#!">Cadastro de Promotores</a></li>
                        </ul>
                    </div>
                </div>
  
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Links Extras</h4>
                        <div class="divider mb-4"></div>
  
                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Termos &amp; Condições</a></li>
                            <li><a href="#!">Politaca de Privacidade</a></li>
                            <li><a href="#!">Sobre a Cateira</a></li>
                            <li><a href="#!">Contacto</a></li>
                        </ul>
                    </div>
                </div>
  
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">INFO</h4>
                        <div class="divider mb-4"></div>
  
                        <div class="footer-contact-block mb-4">
  
                            <h4 class="mt-2"><i class="fa fa-envelope"></i> <a href="mailto:example@example.com">geral@carteiradoartista.co.ao</a></h4>
                            <h4 class="mt-2"><i class="fa fa-phone-square" aria-hidden="true"></i> <a href="">+244 937256190</a></h4>
                        </div>
  
                        <div class="footer-contact-block">
  
                            <ul class="list-inline footer-socials mt-4">
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-facebook-f"></i> </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            Copyright © 2023 Fort Code company
                        </div>
                    </div>
  
                </div>
  
                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop scroll-top-to reveal" href="#top">
                            <i class="fa fa-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
  </html>
                
@endsection