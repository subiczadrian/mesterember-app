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
    <title>Kezdőlap</title>
</head>
<body>
    <?php require_once('navbar.php') ?>

    <!-- Leírás -->

    <p>
      Kültéri, beltéri munkák elvégzése, kőzművek kiépítése, karbantartása és fejlesztése Budapesten
      belül.
    </p>
    <p>
      Szolgáltatásaink Budapest IV. ; V. ; VI. ; VII. ; XIII. ; XIV. és XV. kerületében érhetőek el.
    </p>
    <br />
    <p>Fő tevékenységünk az alábbiak:</p>
    <li><a>Kültéri festés</a></li>
    <li><a>Kültéri burkolás</a></li>
    <li><a>Beltér festés</a></li>
    <li><a>Hidegburkolás</a></li>
    <li><a>Elektromos hálózat kiépítése</a></li>
    <li><a>Gáz bevezetés</a></li>
    <li><a>Vízvezeték kiépítése</a></li>
    <br />
    <p>Mottónk: "Jó munkához idő és sok pénz kell, szarhoz pedig még több idő és még több pénz."</p>
    <p>Na mi leginkább a mottónk második valósítjuk meg.</p>

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
    <script src="scripts/main.js"></script>
</body>
</html>