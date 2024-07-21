@extends("merge.site.index")
@section("content")
@include("sweetAlerts.alerts")


    <main>
      <section class="hero">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div
              class="carousel-item active"
              style="background-image: url('assets/images/banner.jpg')"
            >
              <div class="hero-background-overlay"></div>
              <div class="container h-100">
                <div class="row align-items-center d-flex h-100">
                  <div class="col-md-7">
                    <div class="block">
                      <div class="divider mb-3"></div>
                      <span class="text-uppercase text-sm letter-spacing"
                        >Ministerio da Cultura
                      </span>
                      <h1 class="mb-3 mt-3">
                        Carteira Profissional do Artista, É Tudo Pela Arte,
                        Cultura!
                      </h1>
                      <p class="mb-4 pr-5"></p>
                      <div class="btn-container">
                        <a
                          href="#"
                          target="_blank"
                          class="btn btn-primary"
                          style="background-color: #3d2822"
                          >Inscrever-Se<i class="icofont-simple-right ml-2"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="carousel-item"
              style="background-image: url('assets/images/banner1.jpg')"
            >
              <div class="hero-background-overlay"></div>
              <div class="container h-100">
                <div class="row align-items-center d-flex h-100">
                  <div class="col-md-7">
                    <div class="block">
                      <div class="divider mb-3"></div>
                      <span class="text-uppercase text-sm letter-spacing"
                        >Ministerio da Cultura</span
                      >
                      <h1 class="mb-3 mt-3">
                        Agora a Arte Ganha mais Vida e Destaque!
                      </h1>

                      <p class="mb-4 pr-5">
                        Os Dois Guerreiros Mais Poderosos São A Paciência E O
                        Tempo.
                      </p>
                      <div class="btn-container">
                        <a
                          href=""
                          target="_blank"
                          class="btn btn-primary"
                          style="background-color: #3d2822"
                          >Inscrever-se <i class="icofont-simple-right ml-2"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="carousel-item"
              style="background-image: url('assets/images/banner2.jpg')"
            >
              <div class="hero-background-overlay"></div>
              <div class="container align-items-center d-flex h-100">
                <div class="container h-100">
                  <div class="row align-items-center d-flex h-100">
                    <div class="col-md-7">
                      <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing"
                          >Don Gil Catenga</span
                        >
                        <h1 class="mb-3 mt-3">
                          Sejá um Artista com reconhecimento e valor!
                        </h1>

                        <p class="mb-4 pr-5">
                          Angola dos angolanos é como cérebros
                          pensantes,engaiolados em seu próprio Fenomeno
                          existencia
                        </p>
                        <div class="btn-container">
                          <a
                            href="#"
                            target="_blank"
                            class="btn btn-primary"
                            style="background-color: #3d2822"
                            >Inscrever-Se
                            <i class="icofont-simple-right ml-2"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <!-- second section publicher -->

      <section id="about" class="section-2 py-5">
        <div class="container py-2">
          <div class="row">
            <div class="col-md-6 align-items-center d-flex">
              <div class="about-block">
                <h1 class="title-color">Bem-Vindo (a)</h1>
                <div class="mt-2 mb-3 text-muted">
                  Carteira Profissional de Artista
                </div>
                <p class="lead">
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
                <img src="assets/images/banner.jpg" alt="" class="w-100" />
              </div>
            </div>
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
                          <img src="assets/images/logo.png" alt="" class="img-fluid">
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

