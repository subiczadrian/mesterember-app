<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img id="navbar-logo" src="img/Logo.jpg"></a>
  <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./index.php">Kezdőlap</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="company-information.php">Céginformáció</a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link dropdown-toggle"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Munkatársaink
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="interior.php">Beltér</a></li>
          <li><a class="dropdown-item" href="exterior.php">Kültér</a></li>
          <li><a class="dropdown-item" href="utilities.php">Közművek</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <?php if(isset($_SESSION["user_id"])): ?>
    <button class="btn" id="login-button">
      <a class="nav-link navbar-btn" aria-current="page" href="./logout.php">Kijelentkezés</a>
    </button>
  <?php else: ?>
    <button class="btn" id="login-button">
      <a class="nav-link navbar-btn" aria-current="page" href="./login.php">Bejelentkezés</a>
    </button>
  <?php endif; ?>

  <button class="btn" id="signup-button">
    <a class="nav-link navbar-btn" aria-current="page" href="./sign-up.html">Regisztráció</a>
  </button>
</div>
</nav>