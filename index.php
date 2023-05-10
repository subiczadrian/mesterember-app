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
<p class="idx-desc"><img src="img/index_img/cheap.png" id="cheap">
  Kültéri, beltéri munkák elvégzése olcsó anyagokból és teljes színvonaltalansággal!
</p>
<p class="idx-desc"><img src="img/index_img/beer.png" id="beer">
  Mérhetetlen mennyiségű sör elpusztítása a nap minden szakában (töményeket is írtunk)!
</p>
<p class="idx-desc"><img src="img/index_img/repair.png" id="repair">
  Kőzművek kiépítése karbantartása és fejlesztés Budapesten belül.
</p>
</div>

<hr class="rounded" />

<p>
  Szolgáltatásaink Budapest IV. ; V. ; VI. ; VII. ; XIII. ; XIV. és XV. kerületében érhetőek el.
</p>

<hr class="rounded" />

<p>Fő tevékenységünk az alábbiak:</p>
<li><a>Kültéri festés</a></li>
<li><a>Kültéri burkolás</a></li>
<li><a>Beltér festés</a></li>
<li><a>Hidegburkolás</a></li>
<li><a>Elektromos hálózat kiépítése</a></li>
<li><a>Gáz bevezetés</a></li>
<li><a>Vízvezeték kiépítése</a></li>
<br />


    <!-- Footer -->

    <?php require_once('footer.php') ?>