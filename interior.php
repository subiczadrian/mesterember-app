<?php require_once('session.php') ?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>EM - Beltér</title>
  </head>
   <!-- NavBar -->
  <body>
    
  
  <?php require_once('navbar.php') ?>

 <!-- Description -->

 <div class="desc-container container">
    <p class="int-desc" id="int-desc-long"><img src="img/int_img/interior-logo.png" class="desc-pic">
      A beltér egy ház szíve, lelke. Szép házban kényelmesedik el az ember, ezért készítünk csúnya
      belsőt, hogy ne kényelmesedjen el az ember.</p>

      <p class="int-desc"><img src="img/int_img/alert.png" class="desc-pic" id="alert-pic">
      Figyelmeztetés! <br>
      Miután Józsi felmondott nálunk, ellopta az egyetlen vízmértéket, szóval nem megy az egyenes.
      </p>
      
      <p class="int-desc"><img src="img/int_img/alert.png" class="desc-pic" id="alert-pic">
      Másik Figyelmeztetés! <br />
      Lakatos munkát nem tudunk végezni, mivel Kalányos MájkülDzsekszont tegnap elvitték a Jagellók.
      </p>
      </div>

    <!--Anchor Links-->

    <a class="anchorlinks" id="al-coating" href="#al-ft1">
      BURKOLÁS<img src="img/global_img/insulation-logo.png" id="coating-logo" />
    </a>

    <a class="anchorlinks" id="al-paint" href="#al-ft2">
      FESTÉS<img src="img/global_img/paint-logo.png" id="paint-logo" />
    </a>

    <hr class="rounded" />

    <!-- Burkolók -->

    <h2 class="field-title1" id="al-ft1">Burkolóink:</h2>
    <p class="units">
      Név: Gipsz Jakab <br />
      Szakképzettség: Lego szedés,tehergépkocsi szerelés, gipszkarton felrakás (OKJ) <br />
      Referencia: "Jó van az úgy!" Facebook csoport. <br />
      Elérhetőség: +36 52/753-9512
      <img src="img/int_img/gipsz-jakab.jpg" id="gipsz-pic">
    </p>

    <p class="units">
      Név: Kőműves Kelemen <br />
      Szakképzettség: Csempe felrakás (kis mérték), csempe leverés a fallal együtt (mesterfokon), várfalépítés (profi)
      <br />
      Referencia: Kőmívesné (✝) <br />
      Elérhetőség: +36 70/456-3219
      <img src="img/int_img/komuves-kelemen.jpg" id="komuves-pic">
    </p>

    <hr class="rounded" />

    <!-- Painter (Interior) -->

    <h2 class="field-title2" id="al-ft2">Festőink:</h2>
    <p class="units">
      Név: Kiss Ernő<br />
      Szakképzettség: Étel festés, húsvéti tojás festés<br />
      Referencia: Napsugár Óvoda Katica Csoport <br />
      Elérhetőség: +36 20/321-7894
      <img src="img/int_img/kiss-erno.jpg" id="kisserno-pic">
    </p>

    <p class="units">
      Név: Iksz Ipszilon <br />
      Szakképzettség: Tempera mester, szülei elmondása szerint Ő az új Picasso
      <br />
      Referencia: A szülei <br />
      Elérhetőség: +36 30/741-5974
      <img src="img/int_img/iksz-ipszilon.jpg" id="iksz-pic">
    </p>

    <!-- AnchorLink to Top -->

    <a id="anchorlinktop" href="#top"
      ><img id="up-arrow1" src="img/global_img/up-arrow.png" />UGRÁS A LAPTETEJÉRE
      <img id="up-arrow2" src="img/global_img/up-arrow.png" /></a
    ><br />

    <!-- Footer -->

    <?php require_once('footer.php') ?>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
