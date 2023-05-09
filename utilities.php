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
    <title>EM - Közművek</title>

    <!-- Background -->
  </head>
  <body>
    <!-- NavBar -->
    <h2 id="top"></h2>
    <?php require_once('navbar.php') ?>

    <br />

    <!-- Description -->

    <div class="desc-container container">
      <p class="ut-desc">
        <img src="img/power-in.png" id="powerin-pic" />
        Nincs áram? Ne lopja! Köttesse be velünk, igaz nagy különbség nincs!
      </p>
      <p class="ut-desc">
        <img src="img/water-in.png" id="waterin-pic" />
        Víz kell? Keressen patakot, az nem lesz olyan kemény mint a miénk.
      </p>
      <p class="ut-desc">
        <img src="img/gas-in.png" id="gasin-pic" />
        Nem gáz, ha nincs gáz, mert drága. Kérésre azért bevezetjük.
      </p>
    </div>

    <!--Anchor Links-->

    <a class="anchorlinks" id="al-electricity" href="#al-ft1">
      VILLANY<img src="img/electricity-logo.png" id="electricity-logo" />
    </a>

    <a class="anchorlinks" id="al-water" href="#al-ft2">
      VÍZ<img src="img/water-logo.png" id="water-logo" />
    </a>

    <a class="anchorlinks" id="al-gas" href="#al-ft3">
      GÁZ<img src="img/gas-logo.png" id="gas-logo" />
    </a>

    <hr class="rounded" />

    <br />

    <!-- Electricity -->
    <h2 class="field-title1" id="al-ft1">Villanyszerelőink:</h2>
    <p class="units">
      Név: Magneto <br />
      Szakképzettség: Villám gyors, nagyon precíz, csak úgy vonzza magához a munkát és a pénzedet.
      <br />
      Referencia: X-Men <br />
      Elérhetőség: +36 30/146-8642
    </p>

    <p class="units">
      Név: Son Goku <br />
      Szakképzettség: Barátaival rendszeresen áramot lop, a hatóságok eddig nem kapták el. <br />
      Referencia: A haja <br />
      Elérhetőség: +36 70/999-6969
    </p>

    <hr class="rounded" />

    <br />

    <!-- Water -->

    <h2 class="field-title2" id="al-ft2">Víz szerelőink:</h2>
    <p class="units">
      Név: Bobby Boucher (alias: vizesnyolcas) <br />
      Szakképzettség: Nemzeti Közszolgálati Egyetem Víztudományi Kar <br />
      Referencia: Louisiana-i Egyetem "Mud Dog" football csapata <br />
      Elérhetőség: +36 30/194-3187
    </p>
    <p class="units">
      Név: Arthur Curry (alias: Aquaman) <br />
      Szakképzettség: Atlantiszi Egyetem vízszerelői OKJ, tökre hasonlít Jason Momoa-ra. <br />
      Referencia: Atlantisz, igaz, hogy már elsüllyedt <br />
      Elérhetőség: +36 1/691-4951
    </p>

    <hr class="rounded" />

    <br />

    <!-- Gas -->
    <h2 class="field-title3" id="al-ft3">Gáz szerelőink:</h2>
    <p class="units">
      Név: Vlagyimir Putyin <br />
      Szakképzettség: Orosz Gázművek, mostanság inkább elzárja mintsem beköti, de olcsó <br />
      Referencia: az anyaország <br />
      Elérhetőség: +7 (954) 753-08-15
    </p>
    <p class="units">
      Név: John D. Rockefeller <br />
      Szakképzettség: USA Petroleum Engineer. Nem csak beköti, de még egy fúrótornyot is ás a
      kertbe. <br />
      Referencia: Igazából az egész világ <br />
      Elérhetőség: +1 (800) 357-0069
    </p>

    <br />

    <a id="anchorlinktop" href="#top"
      ><img id="up-arrow1" src="img/up-arrow.png" />UGRÁS A LAPTETEJÉRE
      <img id="up-arrow2" src="img/up-arrow.png" /></a
    ><br />

    <!-- Footer -->

    <footer>
      <p>Copyright © Magyarország Korm...... Mesteremberek SZJÍ Kft. 2023</p>
    </footer>
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

    <script src="scripts/popup.js"></script>
  </body>
</html>
