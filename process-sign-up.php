<?php
    print_r($_POST);

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    var_dump($password_hash);
?>
