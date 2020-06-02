<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>A tous travaux</title>
</head>

<body>

  <header>
    <?php
    require_once('include/header.php');
    ?>
  </header>

  <main>

    <div id="scroll_to_top">
      <img class="img_retour_haut" src="img/scrolltop.png" alt="Retourner en haut" />
      <!-- <a href="#top"></a> -->
    </div>
    <div class="col-md-12 d-md-flex align-items-end img_fond" style="background-image: url(img/renovation-appartement.jpg); height: 700px; background-size: cover; ">



      <section class="d-md-flex mx-auto align-items-end pb-4 col-md-10">
        <div class="col-md-3 p-0 d-md-flex align-items-center justify-content-around" style="height: 150px;">

        </div>
        <div class="col-md-3 p-0" style="background-color: rgba(255,255,255,0.8); height: 150px;">
          <img class="logo1" src="img/gara.png" alt="">
        </div>
        <div class="col-md-3 p-0 d-flex align-items-center justify-content-center " style="background-color: #efa500; height: 150px;">
          <div class="p-1">
            <h3 class="text-center  m-0" style="font-size: 25px; font-weight: bold;">Joignable au :</h3><br>
            <p class="text-center  m-0" style="font-size: 30px;">0630042853</p>
          </div>
        </div>
        <div class="col-md-3 d-md-flex align-items-end p-2" style="background-color: #73BFB8; height: 150px;">
          <div class="text-center">
            <h3 style="font-size: 25px; margin-bottom: 0;">Vous voulez echanger ?</h3>
            <br>
            <a href="#contact" class="text-center btn btn-warning">Cliquez-içi</a>
          </div>
        </div>
      </section>

      <h4 class="titre p-0">Pour un travail de qualité. Simple, rapide, efficace.</h4>
      <div class="titre2" style="background-color: #3DA5D9;">
        <h4 class="m-0 text-center">Renovation - Appartement - Maison</h4>
      </div>
    </div>
    <div class="col-md-12 d-md-flex align-items-center" style="height: 90px;">
      <h3 class="mx-auto mb-0 titre_gerant">LE GERANT</h3>
    </div>

    <section class="col-md-12 p-0 d-md-flex">
      <div class="col-md-6 justify-content-center align-items-center" style="height: auto;">
        <div class="col-md-12 d-md-flex justify-content-center">
          <img class="rounded-circle img_tete" src="img/tete.jpg" alt="" style="width: 60%; height: 77%;">
        </div>


        <div class="col-md-12 text-center p-3">
          <p class="m-0">Fort d'une expérience de plus de 20 ans, A TOUS TRAVAUX vous propose ses services pour vos renovations, salles de bain ou encore terrasses et autres.</p>
        </div>
      </div>

      <div class="col-md-6 text-center p-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img_taille" src="img/Salle_de_bain.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 style="text-shadow: 2px 2px 20px black;">Achicourt</h5>
                <p style="text-shadow: 2px 2px 10px black;">Maison de particulier.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img_taille" src="img/Salle_de_bain(2).jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Feuchy</h5>
                <p>Maison pour agence immo.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img_taille" src="img/Salle_de_bain(3).jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Arras</h5>
                <p>Boulangerie - Patisserie.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img_taille" src="img/finitionsdb.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Arras</h5>
                <p>Boulangerie - Patisserie.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img_taille" src="img/Salle_de_bain(2).jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Arras</h5>
                <p>Boulangerie - Patisserie.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>





    <div class="col-md-12 d-md-flex align-items-center" style="height: 90px;">
      <h3 class="mx-auto mb-0 titre_client">LES CLIENTS & CHANTIERS</h3>
    </div>

    <div class="col-md-12 d-md-flex m-0 p-0">

      <div class="col-md-6 p-0" style="height: 300px; background-color: rgb(255, 255, 255);">
        <div class="col-md-12 border-right d-flex align-items-center justify-content-center" style="height: 60px; background-color: #FEC601;">
          <b>
            <h3 class="text-center m-0" style="font-weight: bold;">Principaux Clients</h3>
          </b>
        </div>
        <div class="p-4">
          <ul class="" style="line-height: 45px;">
            <li>Particuliers</li>
            <li>Professionels</li>
            <li>Gérants de patrimoine</li>
            <li>Agences Immo</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 p-0" style="height: 300px; background-color: #f0f0f0;">
        <div class="col-md-12 border-right d-md-flex align-items-center justify-content-center" style="height: 60px; background-color: rgba(255, 126, 6, 0.808);">
          <h3 class="text-center m-0" style="font-weight: bold;">LES CHANTIERS</h3>
        </div>
        <div class="p-4">
          <ul class="" style="line-height: 45px;">
            <li>Appartements</li>
            <li>Maisons</li>
            <li>Extérieurs</li>
            <li>Intérieurs</li>
          </ul>
        </div>
      </div>

    </div>




    <div class="col-md-12 d-md-flex align-items-center" style="height: 90px; background-color: rgb(45, 157, 231);">
      <h3 class="mx-auto mb-0 titre_presta" style="color: white;">PRESTATIONS</h3>
    </div>

    <section class="col-md-12 p-5 d-md-flex mx-auto justify-content-around" style="background-color: white; height: auto;">

      <div class="col-md-10 p-0 d-flex align-items-center justify-content-around" style="background-color: white; height: auto;">
        <div class="text-center">
          <i class="fas fa-6x fa-hammer"></i>
          <b>
            <h3 class="p-2 m-0">DEMOLITION</h3>
          </b>
          <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="text-center">
          <i class="fas fa-6x fa-bath"></i>
          <b>
            <h3 class="p-2 m-0">SDB</h3>
          </b>
          <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="text-center">
          <i class="fas fa-6x fa-paint-roller"></i>
          <b>
            <h3 class="p-2 m-0">PEINTURE</h3>
          </b>
          <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="text-center">
          <i class="fas fa-6x fa-plug"></i>
          <b>
            <h3 class="p-2 m-0">GROS OEUVRES</h3>
          </b>
          <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </section>

    <section class="col-md-10 p-5 d-md-flex mx-auto justify-content-around">
      <div class="text-center">
      <i class="fas fa-6x fa-plug"></i>
      <b>
        <h3 class="p-2 m-0">TERRASSES</h3>
      </b>
      <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="text-center">
      <i class="fas fa-6x fa-plug"></i>
      <b>
        <h3 class="p-2 m-0">GROS OEUVRES</h3>
      </b>
      <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="text-center">
      <i class="fas fa-6x fa-plug"></i>
      <b>
        <h3 class="p-2 m-0">GROS OEUVRES</h3>
      </b>
      <p class="text-center p-3 m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    </section>

    <div class="col-md-12 d-md-flex align-items-center " style="height: 90px; background-color: orange;">
      <h3 class="mx-auto mb-0 loca" style="color: rgb(255, 255, 255);">LOCALISATION</h3>
    </div>

    <div class="d-md-flex col-md-12" style="height: 300px; background-color: white;">
      <div class="col-md-8 mx-auto p-4 d-md-flex align-items-center justify-content-around">
        <div class="col-md-6 ">
          <h3>A TOUS TRAVAUX</h3>
          <p class="m-0">Secteur Arrageois</p>
          <p class="m-0">62000 Arras</p>
          <b>
            <p>06 30 04 28 53</p>
          </b>
        </div>
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40786.24076998124!2d2.7328426212755055!3d50.28931357899619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd47d866f95a7b%3A0x6869aedb05652a21!2sArras!5e0!3m2!1sfr!2sfr!4v1589789569230!5m2!1sfr!2sfr" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>

    <section id="contact" class="col-md-12 p-0 m-0 d-md-flex">
      <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color: #0093e7; height: auto;">
        <div class="">
          <div class="text-center p-5">
            <img class="logo" src="img/pan.png" alt="">
          </div>

          <h3 class="text-center m-0" style="color: white;">ME CONTACTER</h3>
        </div>

      </div>
      <div class="col-md-8 align-items-center" style="background-color: #f0f0f0; height: auto;">
        <form class="p-5 col-md-8 mx-auto">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Nom</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label>Prénom</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="">Téléphone</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label>Adresse</label>
              <input type="text" class="form-control">
            </div>


          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCity">Descriptif</label>
              <textarea type="text" class="form-control"></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary col-12">Envoyer</button>
          </div>

        </form>
      </div>
    </section>

    <div class="col-md-12 p-0 m-0 d-md-flex" style="background-color: rgb(51, 51, 51); height: 225px;">
      <section class="d-md-flex mx-auto align-items-end justify-content-center pb-4 col-10">

        <div class="col-md-3 p-0" style="background-color: rgba(255,255,255,0.8); height: 150px;">
          <img class="logo1" src="img/gara.png" alt="">
        </div>
        <div class="col-md-3 p-0 d-md-flex align-items-center justify-content-center " style="background-color: #efa500; height: 150px;">
          <div class="p-1">
            <h3 class="text-center  m-0" style="font-size: 25px; font-weight: bold;">Joignable au :</h3><br>
            <p class="text-center  m-0" style="font-size: 30px;">0630042853</p>
          </div>
        </div>
        <div class="col-md-3 d-md-flex align-items-end p-2" style="background-color: #e7000b; height: 150px;">
          <div class="text-center">
            <h3 style="font-size: 25px; margin-bottom: 0;">Vous voulez echanger ?</h3>
            <br>
            <a href="#contact" class="text-center btn btn-success">Cliquez-içi</a>
          </div>
        </div>
      </section>
    </div>
    </section>
    </div>

    </div>

  </main>

  <footer>
    <?php
    require_once('include/footer.php');
    ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</body>

</html>