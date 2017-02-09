<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>MK FOTO FILM</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="img/mkglp.jpg" type="image/x-icon">
<link rel="icon" href="img/mkglp.jpg" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

<style>
img{ box-shadow: 5px 5px 10px;} 
</style>

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top " role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="img/mk.jpg" alt="logo" width="160" height="70" ></a>
              <!-- Logo End -->

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">HOME</a></li>
                 <li ><a href="#about">O NAS</a></li>
                 <li>
                     <a href="#foto" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                        aria-haspopup="true" aria-expanded="false">FOTO<span class="caret"></span></a>
                     <!-- rozwijane menu -->
                       <ul class="dropdown-menu">
                           <li><a>element 1</a></li>
                           <li><a>element 2</a></li>
                           <li><a>element 3 </a></li>
                           <li><a>element 4 </a></li>
                       </ul>
                 </li>
                 <li ><a href="#video">VIDEO</a></li>
                 <li ><a href="#partners">WSPÓŁPRACA</a></li>
                 <li ><a href="#contact">KONTAKT</a></li>
                 <li ><a href="logowanie.php" target="_blank">STREFA KLIENTA</a></li>                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Navbar end -->

<div class="container"> 
    <div id="home">
       <div id="carousel" class="carousel slide data-pause" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active">
                <img src="img/karuzela/muszka.jpg" width="1900" alt="nic">
                <div class="carousel-caption">
                    <h2 class="text-center  wowload fadeInUp"> Cenimy styl i elegancję... </h2>
                    <p>   </br>  </p>
                </div>
            </div>
            <div class="item">
                <img src="img/karuzela/perfuma.jpg" alt="nic">
              <div class="carousel-caption">
                  <h2 class="text-center  wowload fadeInUp"> Lubimy, gdy wszystko jest dopracowane </br> do perfekcji... </h2>
                <p>  </br> </p>
              </div>
            </div>
            <div class="item">
                <img src="img/karuzela/wodka.jpg" alt="nic">
              <div class="carousel-caption">
                  <h2 class="text-center  wowload fadeInUp"> Znamy siłę argumentów </br> wszystkich argumentów... </h2>
                <p>  </br> </p>
              </div>
            </div>
            <div class="item">
                <img src="img/karuzela/buty.jpg" alt="nic">
              <div class="carousel-caption">
                <h2 class="text-center  wowload fadeInUp"> Dostrzegamy to, czego nie widzą inni... </h2>
                <p> </br> </p>
              </div>
            </div>
            <div class="item">
                <img src="img/karuzela/kamera.jpg" alt="nic">
              <div class="carousel-caption">
                <h2 class="text-center  wowload fadeInUp"> Jesteśmy zgranym zespołem... </h2>
                <p> </br> </p>
              </div>
            </div>
            <div class="item">
                <img src="img/karuzela/telefon.jpg" alt="nic">
              <div class="carousel-caption">
                <h2 class="text-center  wowload fadeInUp"> Szanujemy zdanie innych... </h2>
                <p> </br> </p>
              </div>
            </div>
            <div class="item">
                <img src="img/karuzela/mpk.jpg" alt="nic">
              <div class="carousel-caption">
                <h2 class="text-center  wowload fadeInUp"> Mamy nieszablonowe pomysły... </h2>
                <p> </br> </p>
              </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>


<!-- section about -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp"> DUET MK FOTO FILM </h2>  
  <div class="row text-justify">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4 id="about-foto"><i class="fa fa-camera"></i>Natalia</h4>
        <div id="about-nat"><img  src="img/natalia200.jpg" class="img-circle center-block"  alt="natalia"></div>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet ornare ligula. Nam ut malesuada justo. Nam eu est lacus. Nunc aliquam ornare lorem, in vestibulum ligula bibendum ac. Duis vitae magna ut leo tempor viverra at id nisl. Nam mollis vitae mi sed tempor. Vivamus vel pulvinar eros. Integer rhoncus tempor sapien eget iaculis. </p>
  </div>
  <div class="col-sm-6 wowload fadeInRight">
    <h4 id="about-video"><i class="fa fa-video-camera"></i>Marek</h4>
        <div id="about-mar" ><img  src="img/marek200.jpg" class="img-circle center-block"  alt="marek"></div>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet ornare ligula. Nam ut malesuada justo. Nam eu est lacus. Nunc aliquam ornare lorem, in vestibulum ligula bibendum ac. Duis vitae magna ut leo tempor viverra at id nisl. Nam mollis vitae mi sed tempor. Vivamus vel pulvinar eros. Integer rhoncus tempor sapien eget iaculis. </p>    
  </div>
  </div>
</div>
<!-- section foto gallery -->
<div id="foto"  class="container spacer about">
<h2 class="text-center wowload fadeInUp"> GALERIA FOTOGRAFII </h2>
   <div class="row grid team  wowload fadeInUpBig">	
    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img src="img/foto1.jpg" alt="img01" class="img-responsive" />
        <figcaption>
            <h4></h4>
            <p>GALERIA PRZYGOTOWAŃ WESELNYCH<br><br>
            <a href="img/przygotowania/01 (11 of 18).jpg" title="1" data-gallery="#data-galery1">ZOBACZ</a></p>            
        </figcaption>
    </figure>
    </div>
    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="img/foto2.jpg" alt="img01"/>
        <figcaption>            
            <h4></h4>
            <p>GALERIA FOTOGRAFII ŚLUBNEJ<br><br>
            <a href="img/ślub/01 (10 of 13).jpg" title="2" data-gallery="data-galery2">ZOBACZ</a></p>
        </figcaption>
    </figure>
    </div>
    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="img/foto3.jpg" alt="img01"/>
        <figcaption>
            <h4></h4>
            <p>GALERIA FOTOGRAFII WESELNYCH<br><br>
            <a href="img/wesele/01 (6 of 19).jpg" title="3" data-gallery="data-galery3">ZOBACZ</a></p>          
        </figcaption>
    </figure>
    </div>
    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="img/foto4.jpg" alt="img01"/>
        <figcaption>
            <h4></h4>
            <p>GALERIA FOTOGRAFII PLENEROWEJ<br><br>
            <a href="img/plener/01 (5 of 23).jpg" title="4" data-gallery="data-galery4">ZOBACZ</a></p>
        </figcaption>
    </figure>
    </div>
  </div>
</div>
<!-- section video galery -->
<div id="video"  class="container spacer about">
<h2 class="text-center wowload fadeInUp"> GALERIA VIDEO </h2>
   <div class="row grid team  wowload fadeInUpBig">
       <div id="carousel" class="carousel slide data-pause" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active">
                <iframe id="ytplayer" width="640" height="360" src="http://www.youtube.com/embed/VqpgJ7yVueI"></iframe>
            </div>
            <div class="item">
                <iframe id="ytplayer" width="640" height="360" src="http://www.youtube.com/embed/nsVygoojOMg"></iframe>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>

<!-- Partners -->
<div id="partners"  class="container spacer about">
<h2 class="text-center wowload fadeInUp"> WSPÓŁPRACA </h2>
    <div class="row grid team  wowload fadeInUpBig">
        <div class="col-sm-6 wowload fadeInUp">
            <a href="http://mkfotofilm.com/" target="_blank" ><img  src="img/mk.jpg" width="300" height="200" class="img-rounded center-block"  alt="mkfotofilm"></a> 
        </div>
        <div class="col-sm-6 wowload fadeInRight">
            <a href="http://zespolvector.pl/" target="_blank" ><img  src="img/vector.png" width="300" height="200" class="img-rounded center-block center-block"  alt="marek"></a>
        </div>
    </div>
</div>


<div id="contact" class="container spacer about">
<!--Contact Starts-->
    <div class="container contactform center">
    <h2 class="text-center  wowload fadeInUp"> KONTAKT </h2>
      <div class="row wowload fadeInLeftBig">      
          <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Company">
            <textarea rows="5" placeholder="Message"></textarea>
            <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
          </div>
      </div>
    </div>
</div>
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Created by Grzegorz Grochola 2016 for MK FOTO FILM. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>
<div id="galery1">   
    <a href="img/przygotowania/01 (1 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (2 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (3 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (4 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (5 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (6 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (7 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (8 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (9 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (10 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (12 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (13 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (14 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (15 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (16 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (17 of 18).jpg" title="1" data-gallery="#data-galery1"></a>
    <a href="img/przygotowania/01 (18 of 18).jpg" title="1" data-gallery="#data-galery1"></a>       
</div>
<div id="galery2">
    <a href="img/ślub/01 (2 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (3 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (4 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (5 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (6 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (7 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (8 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (9 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (11 of 13).jpg" title="2" data-gallery="data-galery2"></a>
    <a href="img/ślub/01 (12 of 13).jpg" title="2" data-gallery="data-galery2"></a>  
</div>
<div id="galery3">
    <a href="img/wesele/01 (1 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (2 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (3 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (4 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (5 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (7 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (8 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (9 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (10 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (11 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (12 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (13 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (14 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (15 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (16 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (17 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (18 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (19 of 19).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (1 of 6).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (2 of 6).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (3 of 6).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (4 of 6).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (5 of 6).jpg" title="3" data-gallery="data-galery3"></a>
    <a href="img/wesele/01 (6 of 6).jpg" title="3" data-gallery="data-galery3"></a>   
</div>
<div id="galery4">
    <a href="img/plener/01 (1 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (2 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (3 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (4 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (6 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (7 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (8 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (9 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (10 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (12 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (12 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (13 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (14 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (15 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (16 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (17 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (18 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (19 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (20 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (21 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (22 of 23).jpg" title="4" data-gallery="data-galery4"></a>
    <a href="img/plener/01 (23 of 23).jpg" title="4" data-gallery="data-galery4"></a>
</div>






<div id="ytplayer"></div>

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '360',
      width: '640',
      videoId: 'M7lc1UVf-VE'
    });
  }
</script>


<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>