<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<title>Serreson</title>
<link rel="shortcut icon" href="serreson.ico" type="image/x-icon">
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>

<body>


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      <img src="assets/images/serreson.png"   height="100"  alt="" >
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#about">Projet Serreson</a></li>
                      
                      <li class="scroll-to-section"><a href="#testimonials">Avis</a></li>
                      <li class="scroll-to-section"><a href="/contact">Nous Contacter</a></li>
                      
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Se Connecter</button>
                      
                  </ul>        
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
        
      </div>
      <span style="color:red"> @foreach($errors->all() as $error)
                  {{$error}}
                  @endforeach
      </span>
      <div class="modal-body">
              <form action=" {{route('authentification')}} "method="post">
              @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email" name="email">
            <small id="emailHelp" class="form-text text-muted">Ne jamais communiquer à quelqu'un.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe" name="password">
          </div>
          <div class="form-group">
          <label for="Role " >Role</label>
               <select class="form-select" aria-label="Default select example" name="role"  >
               <option selected value="utilisateur">Utilisateur</option>
                <option  value="administateur">Administrateur</option>
               
              </select>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">se rappeler de moi</label>
          </div>
          
          
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </div>
      </form>
    </div>
  </div>
</div>

  
<!-- ***** Main Banner Area Start ***** -->
<div class="swiper-container" id="top">
<div class="swiper-wrapper">
  <div class="swiper-slide">
    <div class="slide-inner" style="background-image:url(assets/images/couverture5.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="header-text">
              <h2><em>Desormais </em> Cultivons de manière durable <br> avec  <em> la SerreSon </em></h2>
              <div class="div-dec"></div>
              <p>Serreson Vous offre une serre intelligente capable de reproduire les saisons pour vous différentes cultures </p>
              <div class="buttons">
                <div class="green-button">
                  <a href="#commande">Commandez votre serre</a>
                </div>
                <div class="orange-button">
                  <a href="#information">Voir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="slide-inner" style="background-image:url(assets/images/couverture.jpg)"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="header-text">
              <h2><em>Une Serre</em> intélligente <br>&amp; Commode pour vos espaces afin de produire et <em>manger Bio </em> </h2>
              <div class="div-dec"></div>
              <p>Commentaires.</p>
              <div class="buttons">
                <div class="green-button">
                  <a href="#">Commandez votre serre</a>
                </div>
                <div class="orange-button">
                  <a href="#">voir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="slide-inner" style="background-image:url(assets/images/couverture4.jpg)"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="header-text">
              <h2><em >Une Serre</em> autonome <br>&amp; capable de reproduire le climat adequat à <em>la culture en production </em> </h2>
              <div class="div-dec"></div>
              <p>Commentaires.</p>
              <div class="buttons">
                <div class="green-button">
                  <a href="#">Commandez votre serre</a>
                </div>
                <div class="orange-button">
                  <a href="#">voir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="slide-inner" style="background-image:url(assets/images/appimage1.png)">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="header-text">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="swiper-button-next swiper-button-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>
</div>

<!-- ***** Main Banner Area End ***** -->

<section class="services" id="services">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="service-item">
      <i class="fa-brands fa-bots"></i>
        <h4>Une intelligente artificielle</h4>
        <p> une IA pour pour controler et automatiser les taches dans votre serre</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="service-item">
        <i class="fas fa-cloud"></i>
        <h4>Google cloud &amp Google IOT plateform </h4>
        <p>les composants connectés sont hébergés sur Google cloud</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="service-item">
        <i class="fas fa-charging-station"></i>
        <h4>Serre hydride</h4>
        <p>serre capable de fonctionner avec l'energie solaire et l'energie électrique </p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="service-item">
        <i class="fas fa-suitcase"></i>
        <h4>Application Web & mobile</h4>
        <p>les applications sont disponibles sur mobile (IOS, Android), tablet et ordinateur</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="service-item">
      <i class="fa-brands fa-teamspeak"></i> 
        <h4>Equipe d'entretien</h4>
        <p>une equipe d'entretien pour vos besoins</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="service-item">
      <i class="fa-solid fa-shop"></i>
        <h4>Marketplace</h4>
        <p>E-commerce pour vendre les produits issuent des serres</p>
      </div>
    </div>
  </div>
</div>
</section>

<section class="simple-cta">
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h4>technologie pour <strong>l'Agriculture</strong></h4>
    </div>
    <div class="col-lg-7">
      <div class="buttons">
        <div class="green-button">
          <a href="#commande">Commandez votre Serre</a>
        </div>
        <div class="orange-button">
          <a href="#">telechargez l'application Mobile</a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="about-us" id="about">
<div class="container">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <div class="section-heading">
        <h6>Projet</h6>
        <h4>Serreson</h4>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="naccs">
        <div class="tabs">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu">
                <div class="active gradient-border"><span>problemes</span></div>
                <div class="gradient-border"><span>Business plan</span></div>
                
              </div>
            </div>
            <div class="col-lg-12">
              <ul class="nacc">
                <li class="active">
                  <div>
                    
                    <div class="list-item">
                      <span class="item item-title">Pénurie des aliments</span>
                      <span class="title">Faible taux de production nationale</span>
                      <span class="title">Forte dépendance des cultures importées</span>
                      
                    </div>
                    <div class="list-item">
                      <span class="item item-title">exportations</span>
                      <span class="title">Perte de conteneurs en </br> haute mer</span>
                      <span class="title">Taxes liées à l'exportation</span>
                      
                    </div>
                    <div class="list-item">
                      <span class="item item-title">Urbanisation croissante</span>
                      <span class="title">Zone de production </br>limitée</span>
                      <span class="title">De plus en plus de terres sèches </span>
                    </div>
                    
                  </div>
                </li>
                
                <li>
                  <div>
                    <div class="main-list">
                      <span class="title">Project Title</span>
                      <span class="title">Budget</span>
                      <span class="title">Deadline</span>
                      <span class="title">Client</span>
                    </div>
                    <div class="list-item">
                      <span class="item item-title">Graphics Redesign</span>
                      <span class="item">$500 to $800</span>
                      <span class="item">2022 Nov 24</span>
                      <span class="item">Media One</span>
                    </div>
                    <div class="list-item">
                      <span class="item item-title">Digital Graphics</span>
                      <span class="item">$1,500 to $3,000</span>
                      <span class="item">2022 Nov 18</span>
                      <span class="item">Second Media</span>
                    </div>
                    <div class="list-item">
                      <span class="item item-title">New Artworks</span>
                      <span class="item">$2,200 to $4,400</span>
                      <span class="item">2022 Nov 10</span>
                      <span class="item">Artwork Push</span>
                    </div>
                    <div class="list-item last-item">
                      <span class="item item-title">Complex Arts</span>
                      <span class="item">$1,100 to $2,400</span>
                      <span class="item">2022 Nov 3</span>
                      <span class="item">Media One</span>
                    </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4" id="information">
      <div class="right-content">
        <h4>Description</h4>
        <p>
 Serre commerciale rétractable, elle peut être installée indoor(Domestique). Disposant d'un système d'éclairage artificiel et d'un contrôleur de conditions atmosphériques (température, humidité etc).
Elle est est équipée d'un système vidéo, d'un écran de contrôle intégré et d'une IA capable de surveiller et contrôler la croissance des plans et fruits. 
Elle sera alimentée par des panneaux solaires.

        </p>
        <div class="green-button">
          <a href="/contact">Nous contacter</a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="calculator">
<div class="container">
  <div class="row">
    <div class="col-lg-7">
      <div class="left-image">
        
      </div>
    </div>
    <div class="col-lg-5" id="commande">
      <div class="section-heading">
        <h6>Votre commande</h6>
        <h4>effectuez votre commande rapidement</h4>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('erreur'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('erreur') !!}</li>
                </ul>
            </div>
        @endif
      </div>
      <form id="calculate" action="{{route('commande')}}" method="post">
        @csrf  
        <div class="row">
          <div class="col-lg-6">
            <fieldset>
              <label for="name">Votre Nom</label>
              <input type="name" name="nom" id="name" placeholder="" autocomplete="on" required>
            </fieldset>
          </div>
          <div class="col-lg-6">
            <fieldset>
              <label for="email">Email</label>
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required="">
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label for="subject">Lieu d'habitation</label>
              <input type="subject" name="lieu" id="subject" placeholder="" autocomplete="on" >
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label for="chooseOption" class="form-label">Taille de votre serre</label>
              <select name="Taille" class="form-select" aria-label="Default select example" id="chooseOption" onchange="this.form.click()">
                  <option selected>Choisissez vos tailles</option>
                  <option type="checkbox" name="1,20 x 1,20 m" value="1,20 x 1,20">1,20 x 1,20 m</option>
                  <option value="2,40 x 4,40 m">2,40 x 4,40 m</option>
                  <option value="6,20 x 6,20 m">6,20 x 6,20 m</option>
                  <option value="10,20 x 10,20 m">10,20 x 10,20 m</option>
              </select>
          </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <button type="submit" id="form-submit" class="orange-button">Commender maintenant</button>
            </fieldset>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>

<section class="testimonials" id="testimonials">
<div class="container">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <div class="section-heading">
        <h6>Avis</h6>
        <h4></h4>
      </div>
    </div>
    <div class="col-lg-10 offset-lg-1">
      <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;"><div class="item">
          
          <p>""</p>
          <h4>KOBENAN KOUASSI ADJOUMANI </h4>
          <span>Ministre de l'agriculture</span>
          <div class="right-image">
          <img src="assets/images/serre1.jpeg" alt="">
          </div>
        </div>
        <div class="item">
          
          <p>...</p>
          <h4>monsieur Erwin</h4>
          <span>Responsable</span>
          <div class="right-image">
            <img src="assets/images/serre1.jpeg" alt="">
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
</div>
</section>

<section class="partners">
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-4 col-6">
      <div class="item">
        <img src="assets/images/google2.jpeg" alt="">
      </div>
    </div>
    <div class="col-lg-2 col-sm-4 col-6">
      <div class="item">
        <img src="assets/images/ey2.jpeg" alt="">
        
      </div>
      
    </div>
    <div class="col-lg-2 col-sm-4 col-6">
      <div class="item">
        <img src="assets/images/orange.png" height="110" alt="">
        
      </div>
      
    </div>
  </div>
</div>
</section>

<footer>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <p>Copyright © 2022 Serreson., Ltd. All Rights Reserved. 
      
    </div>
  </div>
</div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/swiper.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var interleaveOffset = 0.5;

  var swiperOptions = {
    loop: true,
    speed: 1000,
    grabCursor: true,
    watchSlidesProgress: true,
    mousewheelControl: true,
    keyboardControl: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    on: {
      progress: function() {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-inner").style.transform =
            "translate3d(" + innerTranslate + "px, 0, 0)";
        }      
      },
      touchStart: function() {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function(speed) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-inner").style.transition =
            speed + "ms";
        }
      }
    }
  };

  var swiper = new Swiper(".swiper-container", swiperOptions);
</script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
// Initialize Firebase
var config = {
  "type": "service_account",
  "project_id": "serre-13d47",
  "private_key_id": "0ca51b777d5b556af1c979c233d24aa47e786aa5",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDkwnlgABVA6lPi\n3TIV+BLOnE3c6w93AsJQkIvAwh1Yi/h9XzIKDcNxw2cmbrPMT8dcp6P3Mi3XjIZX\nSnfckKt/pltHuZoL6dFa4lVlMpGgW6+TGKS7BHNjDnEBFoNfxZd07BAhSxqgNCYd\nUu16mB/qht360RDhCNC2rg3aoEnLB4kxHc2pmKpL+5SCnq7rl7DuuKJqjhrIkj5z\nkf7bEt4ye7wVxgbjhn+NfWMmSVKFBAdvAD/H2f/r0OJF5vnEHk8BBkvhh+2zPp58\np1o73C2r6HcrkBE9XH/qDBs2NBSkbtjhHF2VSJNiGM4p5y16UdZ0HtndihzhzsFN\nyKXPYM6BAgMBAAECggEAAQnjN3BZOqP9uQwOBFt7dxeA56QRpUf8g9Vgder1/a8g\nAaVJe+RzpA5kVQTti4TgbG9J6rzr48EhBs3BMtALICZVXsyDzfJvfAbZJvGrB497\nlEBpVqEbWPAppqYGNyN6HXmEjHHc+ZoycJqt+wZseIe2nww/NBGATYTi90B8lv+n\ngjavBrlOKBEX4cN8qqypiEj2diyt7v1RZ55MAvtJ59c0ZmOj67qLtjRBel97uFVa\nxBHTw8xYMY7Wrx3d5C7N6itDuHXwYVlyjJUhgWt/rj0jmkVbToJqlLBFRgsuPlf6\nM7bKOdBaYPEeBRVAEqBI1bFuw57uQEV2pFDikwDBeQKBgQD4gx1E9raRyaRa1SDo\nFdG5Zu/lKvrTRybmG3N0dQwB5tg84gIVwNbhuWOrOXdzkh9mwdATSEKrq+3vMCZR\nm/U3fQvcRuPsgIV3haZ97onCtBA8gN8RtbWfYaT0RRKd5l6zNNP2yYBjjL0ZohNL\nPgbLui27+4L/hUTG9M0QiLaomQKBgQDrpv/5aEEo45dRxIa7Z3FCeOa3Uqh+zn7+\nXp0Nwvpf/JNzQslvvCIryUgorHcV4IAYrwNc7GSHiiQJI6DJTJKGDBjjlpIDQSjO\n8AbyCyndPH1eR5oWB49S/fAOmNyC/zK4uGF3AdrLlFgJGkjpLbaSuhScuRnkNHSq\nsaMTtJj+KQKBgQDawMeOAkI5WK81SbC6uyIuur7nEotSWaqTGYzq8XFNZz/nb+b3\n8RT2A3QJr/9HG1RK5sZbgts1NJWwW8kPQ2J6ordDAp/1ejiCOoKRDd30Jv6305UI\niNREZPaIExlNJxErXJBNB5jdiHCY1MN5EzN2N/+0HrR0aoJdQ/YS3NU02QKBgGSs\nPaLxVRUA1f6KtPyO3qYFPJuI5o717O8CwJnGeGxVXTDakW/4sah/HyKxO1bPSCpD\nam5iVzhIXcjBvckBu38k3+UqyEo3phVyGaWB+2qWkwCaGkvbAvHzpoC18U7Nc3/S\n1WCgHDboswuAfTGQ4/SfJnsl4NfLSSQ7K24Zs1qxAoGBAMVAw1DjwNudoCK0ZH6d\nXktbu8dzcKVzZq69j5i4Kh8qxa2DsyySSPbDccLOtcQ/EtCFQwHz8rUZbq+sxhp+\ni0EdC8D9y1wSDOiYJQsJXijrO50fPxkZWKrZ5QvTAoGCJffLkmnnJ7oyPcAW4JGM\nNeheo3/9Bn6mLx11qTvYo4WH\n-----END PRIVATE KEY-----\n",
  "client_email": "firebase-adminsdk-47gw9@serre-13d47.iam.gserviceaccount.com",
  "client_id": "111621324067197849144",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-47gw9%40serre-13d47.iam.gserviceaccount.com"
};
firebase.initializeApp(config);


</script>
</body>
</html>
