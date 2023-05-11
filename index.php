<?php

  session_start();

  if (isset($_SESSION["user_id"])) {
      
      $mysqli = require __DIR__ . "/database.php";
      
      $sql = "SELECT * FROM user
              WHERE id = {$_SESSION["user_id"]}";
              
      $result = $mysqli->query($sql);
      
      $user = $result->fetch_assoc();
  }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Kezdőlap</title>
</head>
<body>
    <script src="scripts/navbar.js"></script>

   <!-- NavBar -->

   <?php require_once('navbar.php') ?>

<!-- Description -->

<p id="motto">Mottónk: "Jó munkához idő és sok pénz kell, szarhoz pedig még több idő és még több pénz." </p>
  
<p id="motto-comment">Na mi leginkább a mottónk második valósítjuk meg.</p>

<div class="desc-container container">
<p class="idx-desc"><img src="img/index_img/cheap.png" class="desc-pic cheap">
  Kültéri, beltéri munkák elvégzése olcsó anyagokból és teljes színvonaltalansággal!
</p>
<p class="idx-desc"><img src="img/index_img/beer.png" class="desc-pic beer">
  Mérhetetlen mennyiségű sör elpusztítása a nap minden szakában (töményeket is írtunk)!
</p>
<p class="idx-desc"><img src="img/index_img/repair.png" class="desc-pic repair">
  Kőzművek kiépítése karbantartása és fejlesztés Budapesten belül.
</p>
</div>

<hr class="rounded" />

<p class="budapest">
  Szolgáltatásaink helyei Budapesten:
</p>

<img src="img/index_img/budapest-map.jpg" id="map">  

<hr class="rounded" />

<p id="main-jobs">Fő tevékenységünk az alábbiak:</p>

<div>
  <p id="jobs1">Kültéri festés<img src="img/index_img/job-pic1.png" id="job-pic1"></p>
  <p id="jobs2">Beltér festés<img src="img/index_img/job-pic2.png" id="job-pic2"></p>
  <p id="jobs3">Elektromos hálózat kiépítése<img src="img/index_img/job-pic3.png" id="job-pic3"></p>
  <p id="jobs4">Gáz bevezetés<img src="img/index_img/job-pic4.png" id="job-pic4"></p>
  <p id="jobs5">Vízvezeték kiépítése<img src="img/index_img/job-pic5.png" id="job-pic5"></p>
  <img src="img/index_img/line.png" id="line">
</div>

    <!-- Footer -->

    <?php require_once('footer.php') ?>