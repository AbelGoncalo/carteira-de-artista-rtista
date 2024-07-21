@extends("merge.site.index")
@section("content")
@include("sweetAlerts.alerts")
    <main>
        <section id="about" class="section-2 py-5">
            <div class="container py-2">
              <div class="row">
                <div class="col-md-6 align-items-center d-flex">
                  <div class="about-block">
                    <h1 class="title-color">Bem-Vindo (a)</h1>
                    <div class="mt-2 mb-3 text-muted">
                      Carteira Profissional de Artista
                    </div>
                    <p class="lead fs-5">
                      A Carteira Profissional Do Artista (C.C.P.A), É Resultado Da
                      Emanação De Vontade Das Varias Organizações Culturais
                      Publicada Em D.R. Nº 203 Iiiª Serié De 17 De Dezembro De 2021 E
                      Com Respaldo Do Despacho Conjunto Dos Ministérios Da
                      Administração Pública, Trabalho Segurança Social E Da
                      Cultura, Turismo E Ambiente, Publicado Em D.R Nº 76 De 26 De
                      Maio De 2022. 
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="image-red-background">
                    <img src="/assets/images/banner.jpg" alt="" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </section>

      <!-- second section publicher -->

      <div class="quality carteira">
        <div class="container py-5">
            <div class="col-md-12 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo" style="color: #3d2822">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                              </svg>
                        </div>
                        <div class="text">
                            <h2  class="text-uppercase mt-3 text-dark">Missão</h2>
                            <p class="lead fs-6 mt-3">
                                Existimos Para Permitir Um Futuro Melhor Para Os Artistas Angolanos, 
                                Através Da Garantia Do Sistema De Valorização Profissional Nos Termos Da Lei,
                                Trazendo O Conforto E A Representação Da Classe Nas Suas Mais Variadas
                                Disciplinas E Acções, Nacionais E Internacionais.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="logo" style="color: #3d2822">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h2  class="text-uppercase mt-3 text-dark">Visão</h2>
                            <p class="lead fs-6 mt-3">
                                Nossa Visão É Criar A Conscência Para O Auto Asseguramento Do Artista,
                                Sobre A Criação De Bases Sólidas, Em Todas As Etapas De Sua Jornada, 
                                Gerando Um Futuro Promissor Com Elevado Prestígio.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="logo" style="width: 30px; color: #3d2822">
                            <svg version="1.1" id="real_x5F_estate_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="-235 162 128 128" style="enable-background:new -235 162 128 128" xml:space="preserve">
                                <style>.st0{display:none}.st1{display:inline}.st2{fill:#0f0f0f}</style>
                                <g id="hands_1_">
                                <path class="st2" d="M-194.9 243.7c-1.1-1.2-3-1.2-4.2-.1l-4.3 4.1c-1.2 1.1-1.2 3-.1 4.2s3 1.2 4.2.1l4.3-4.1c1.2-1.1 1.2-3 .1-4.2zm8.3 4.5c-1.1-1.2-3-1.2-4.2-.1l-6.5 6.1c-1.2 1.1-1.2 3-.1 4.2 1.1 1.2 3 1.2 4.2.1l6.5-6.1c1.1-1.2 1.2-3 .1-4.2zm12.2 12.9c-1.1-1.2-3-1.2-4.2-.1l-4.3 4.1c-1.2 1.1-1.2 3-.1 4.2 1.1 1.2 3 1.2 4.2.1l4.3-4.1c1.1-1.2 1.2-3 .1-4.2zm-29.9-77.1-30.7 34.9 13.9 11.9 30.7-34.9-13.9-11.9zm-17.1 37.9c-2.4.2-4.6-1.6-4.8-4.1-.2-2.4 1.6-4.6 4.1-4.8 2.4-.2 4.6 1.6 4.8 4.1.2 2.4-1.6 4.6-4.1 4.8zm47.8 2.2s-13.9 2.2-22.4-1.2c-6.2-2.6 1.9-13.7 13.8-13-2.4-1.9-11.1-7-11.1-7l-21.2 24.8 13.7 10.4 1.4 4.3s3.2-2 5.8.4c2.6 2.3.8 5.2-.1 6.4 1.9-1.9 5.8-4.7 8.1-2.8 5.1 4.2-4.3 10.1-3.6 10.8.9.9 6.1-8.7 10.4-3 1.5 2-.8 5.4-2.4 7.3 2-2 4.7-4.3 7.8-1.3 2.5 2.5-1.7 7.4-1.7 7.4s4.8 1.7 7-.5c2.7-2.8-9-13.5-9-13.5l1.2-.4s11.3 15.9 15.9 11.3c4.1-4.1-11.4-15.4-11.4-15.4l1.4-1.4s14.7 15.5 18.4 10.2c3-4.2-13-14.8-13-14.8l1.5-1.3s13.8 11.1 16.6 6.8c4.3-6.6-27.1-24.5-27.1-24.5zm6.3-10.6s-20.1-3.8-27 4.2c-6.5 7.5 24.7 3.5 23.4 4.5 3.1 3.4 25.2 19.1 25.2 19.1l18.1-12.8-18.4-26.8-21.3 11.8zm-27.4 36.8s.5-.4 1.1-1.1l-1.1 1.1zm61.2-65.7-14.4 10.1 26.5 37.2 14.4-10.1-26.5-37.2zm13.2 38.3c-2.4.2-4.6-1.6-4.8-4.1-.2-2.4 1.6-4.6 4.1-4.8 2.4-.2 4.6 1.6 4.8 4.1s-1.7 4.6-4.1 4.8zm-60.9 38.6c-.8.8-1.3 1.5-1.3 1.5s.6-.6 1.3-1.5zm.7-6.9c-1.1-1.2-3-1.2-4.2-.1l-6.5 6.1c-1.2 1.1-1.2 3-.1 4.2 1.1 1.2 3 1.2 4.2.1l6.5-6.1c1.1-1.1 1.2-3 .1-4.2z" id="icon_4_"/>
                            </g></svg>
                        </div>
                        <div class="text">
                            <h2  class="text-uppercase mt-3 text-dark">Valores</h2>
                            <p class="lead fs-6 mt-3">
                                <ul style="color: #0f0f0f; margin-left: -6;">
                                    <li>Ser Uma Entidade De Referência</li>
                                    <li>Respeito No Que Se Faz</li>
                                    <li>Inclusão E Valorização Artística</li>
                                    <li>Empatia e Comprometimento</li>
                                    <li>Responsabilidade</li>
                                    <li>Optimismo</li>
                                    <li>Harmonia</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <section>
        <div class="container py-5">
            <div class="col-md-12 text-center">
                <div class="text">
                    <h2 class="text-dark fs-1">Organograma</h2>
                </div>
                <img src="{{asset("assets/images/organograma.png")}}" alt="">
            </div>
        </div>
      </section>

      <!-- Terceira section -->

      <section class="section-4 py-5 text-center">
        <div class="hero-background-overlay"></div>
        <div class="container">
           <div class="help-container">
                <h1 class="title">VALORIZAMOS A ARTE E OS ARTISTAS</h1>
                <p class="card-text mt-3">OBTENHA A SUA CARTEIRA PROFISSIONAL DE ARTISTA</p>
                <a href="#" class="btn btn-primary mt-3" style="background-color: #3d2822"> Inscrever-se Agora <i class="fa fa-solid fa-angle-right"></i></a>
           </div>
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

<script src="/assets/site/js/sweetalert2.all.min.js"></script>
<script src="/assets/site/js/jquery-3.6.0.min.js"></script>

