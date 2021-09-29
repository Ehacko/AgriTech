<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>AgriTech</title>
    <!-- meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AgriTech est une entreprise de construction d'engin agricole">
    <meta property="og:title" content="Title Here"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="/"/>
    <meta property="og:image" content="/imgs/preview.png"/>
    <meta property="og:description" content="AgriTech est une entreprise de construction d'engin agricole"/>
    <meta http-equiv="Content-Security-Policy" content="
      default-src 'self';
      img-src * data:;
      child-src 'none';
      object-src 'none';
    ">
<!-- stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
<!-- scripts -->
    <script defer="" src="/js/jquery-3.5.1.min.js"></script>
    <script defer="" src="/js/bootstrap.bundle.min.js"></script>
    <script defer="" src="/js/script.js"></script>
  </head>
  <body>
    <main>
      <header id="home" class="text-light d-grid align-content-middle">
        <div>
          <div class="rounded_img">
            <img src="https://img.pixers.pics/pho_wat(s3:700/FO/65/76/31/34/700_FO65763134_cff002fd772d21242e831c74c9f6cde2.jpg,700,699,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,481,650,jpg)/papiers-peints-icone-moissonneuse-batteuse-d-39-epis-de-ble.jpg.jpg" alt="Logo"></div>
            <h1>AgriTech</h1>
          </div>
      </header>
      <div class="sticky-top">
        <nav>
          <div class="navbar navbar-expand-lg navbar-dark">
            <span></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#home">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#machines">Nos machines</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#media">Média</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contactez-nous</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="main">
        <section class="page">
          <div id="about" class="anchor"></div>
          <h2>
            A propos
          </h2>
          <div class="container about-body">
            <p class="d-inline-block align-middle">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
            </p>
          </div>
        </section>        <section class="page">
          <div id="machines" class="anchor"></div>
          <h2>
            Nos machines
          </h2>
          <div class="container machines-body d-flex">
            <!-- <div class="g-row"> -->
            <div class="justify-content-between justify-content-around row row-cols-1 row-cols-md-2 row-cols-sm-1">
              <!-- Product Cards -->

              <div class="flip-card col jumbotron-fluid mb-3 mt-3">
                <div class="flip-card-inner">
                  <div class="flip-card-front border border-success">
                    <div class="card p-4">
                      <div class="img">
                        <img src="/truc.avif" class="card-img-top" alt="photo d'un Truc TX-450">
                      </div>
                      <div class="pt-2">
                        <h3>Truc TX-450</h3>
                        <p class="card-text">Le Truc TX-450 est l'outils parfait pour transformer les choses en truc</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card-back p-3 border border-success">
                    <h4>Spécificité</h4>
                    <div>
                      <ul>
                        <li><span>Puissance : </span><span>1TW</span></li>                <li><span>Vitesse : </span><span>1KM/S</span></li>                <li><span>Consommation : </span><span>1mm²/J</span></li>                <li><span>Type de carburant : </span><span>h²o</span></li>                <li><span>Emission : </span><span>1cm²/m(o³)</span></li>              </ul>
                    </div>
                    <button class="btn btn-dark">en savoir plus</button>
                  </div>
                </div>
              </div>

              <div class="flip-card col jumbotron-fluid mb-3 mt-3">
                <div class="flip-card-inner">
                  <div class="flip-card-front border border-success">
                    <div class="card p-4">
                      <div class="img">
                        <img src="/bidule.avif" class="card-img-top" alt="photo d'un Bidule SV-504">
                      </div>
                      <div class="pt-2">
                        <h3>Bidule SV-504</h3>
                        <p class="card-text">La Bidule SV-504 est l'outils parfait pour transformer les choses en bidule</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card-back p-3 border border-success">
                    <h4>Spécificité</h4>
                    <div>
                      <ul>
                        <li><span>Puissance : </span><span>1TW</span></li>                <li><span>Vitesse : </span><span>1KM/S</span></li>                <li><span>Consommation : </span><span>1mm²/J</span></li>                <li><span>Type de carburant : </span><span>h²o</span></li>                <li><span>Emission : </span><span>1cm²/m(o³)</span></li>              </ul>
                    </div>
                    <button class="btn btn-dark">en savoir plus</button>
                  </div>
                </div>
              </div>

              <div class="flip-card col jumbotron-fluid mb-3 mt-3">
                <div class="flip-card-inner">
                  <div class="flip-card-front border border-success">
                    <div class="card p-4">
                      <div class="img">
                        <img src="/machin.avif" class="card-img-top" alt="photo d'un Machin WD-054">
                      </div>
                      <div class="pt-2">
                        <h3>Machin WD-054</h3>
                        <p class="card-text">Le Machin WD-054 est l'outils parfait pour transformer les choses en machin</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card-back p-3 border border-success">
                    <h4>Spécificité</h4>
                    <div>
                      <ul>
                        <li><span>Puissance : </span><span>1TW</span></li>                <li><span>Vitesse : </span><span>1KM/S</span></li>                <li><span>Consommation : </span><span>1mm²/J</span></li>                <li><span>Type de carburant : </span><span>h²o</span></li>                <li><span>Emission : </span><span>1cm²/m(o³)</span></li>              </ul>
                    </div>
                    <button class="btn btn-dark">en savoir plus</button>
                  </div>
                </div>
              </div>

              <div class="flip-card col jumbotron-fluid mb-3 mt-3">
                <div class="flip-card-inner">
                  <div class="flip-card-front border border-success">
                    <div class="card p-4">
                      <div class="img">
                        <img src="/chouette" class="card-img-top" alt="photo d'un Chouette HK-045">
                      </div>
                      <div class="pt-2">
                        <h3>Chouette HK-045</h3>
                        <p class="card-text">La Chouette HK-045 est l'outils parfait pour transformer les choses en chouette</p>
                      </div>
                    </div>
                  </div>
                  <div class="flip-card-back p-3 border border-success">
                    <h4>Spécificité</h4>
                    <div>
                      <ul>
                        <li><span>Puissance : </span><span>1TW</span></li>                <li><span>Vitesse : </span><span>1KM/S</span></li>                <li><span>Consommation : </span><span>1mm²/J</span></li>                <li><span>Type de carburant : </span><span>h²o</span></li>                <li><span>Emission : </span><span>1cm²/m(o³)</span></li>              </ul>
                    </div>
                    <button class="btn btn-dark">en savoir plus</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>         
        <section class="page">
          <div id="media" class="anchor"></div>
            <h2> Média </h2>
            <div class="container media-body p-1">
              <div class="p-2 border border-success media-container">
                <div>
                  <div id="mediaCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
    
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>

                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://i.pinimg.com/originals/91/98/e1/9198e1653736a3919947303311958b83.jpg" class="d-block w-100" alt="moissoneuse batteuse moissonnant battant">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.squarespace-cdn.com/content/v1/56009067e4b0b3ef2f02936b/1455827006249-5E4TP8VGXYPCNO2MSGIL/ke17ZwdGBToddI8pDm48kDu-OvKe9-yMBj32JSWknrt7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UZNNUmsixw3l8iPy3vgDTPMwfMBbaTJA8uE3oWp8JUwqzkQXHaRS3Yhvu0vV6Jt1AA/DE.jpg?format=2500w" class="d-block w-100" alt="Tracteur tractant">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/14/89/38/148938bca5c19f553f6fe53810e44f0b.png" class="d-block w-100" alt="Flambeuse flambant">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#mediaCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mediaCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div> 
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer class="page p-5">
          <div id="contact" class="anchor"></div>
          <h2 class="text-primary m-5 justify-content-center d-flex">
            Contactez-nous
          </h2>
          <div class="container text-dark">
            <div class="contact-body">
              <form method="post">
                <div class="form-group">
                  <input placeholder="Nom complet" type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <input placeholder="Téléphone" type="text" class="form-control" id="exampleInputPhone" name="phone">
                </div>
                <div class="form-group">
                  <input placeholder="Courriel" type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="form-group check">
                  <input type="checkbox" id="exampleCheck1" name="newsletter">
                  <label class="form-check-label" for="exampleCheck1">Je souhaite recevoir le newsletter AgriTech</label>
                </div>
                <div class="form-group check">
                  <input type="checkbox" id="exampleCheck2" name="CGU">
                  <label class="form-check-label" for="exampleCheck2">J'ai lu et j'accepte <a href="#condition_general">les conditions general d'utilisation</a> </label>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
              </form>
            </div>
          </div>
        </footer>
      </main>
    </body>
</html>
