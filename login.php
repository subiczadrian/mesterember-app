<?php
    $is_invalid = false;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $mysqli = require __DIR__ . '/database.php';

        $sql = sprintf('SELECT * FROM user WHERE username = "%s"', $mysqli -> real_escape_string($_POST["username"]));

        $result = $mysqli -> query($sql);

        $user = $result -> fetch_assoc();

        if($user){
         if(password_verify($_POST["password"], $user["password_hash"])){
          session_start();

          $_SESSION["user_id"] = $user["id"];
          header('Location: index.php');
          exit;

         }
        };

        $is_invalid = true;
    }
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Regisztráció</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <h1>Bejelentkezés</h1>

      <?php if($is_invalid): ?>
        <em>Helytelen felhasználónév és/vagy jelszó!</em>
      <?php endif; ?>

      <form id="login-form" method="post">
      <div class="mb-3">
          <input
            type="text"
            class="form-control"
            id="username-input"
            placeholder="Felhasználónév"
            name="username"
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            class="form-control"
            id="password-input"
            placeholder="Jelszó"
            name="password"
          />
        </div>
        <button type="submit" class="btn btn-primary">Bejelentkezés</button>
      </form>
    </div>
  </body>
</html>
