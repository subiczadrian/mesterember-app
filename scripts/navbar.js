document.write(`<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
  <a class="navbar-brand" href="./index.php"><img id="navbar-logo" src="img/Logo.jpg"></a>
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
        <a class="nav-link" href="company-information.html">Céginformáció</a>
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
          <li><a class="dropdown-item" href="interior.html">Beltér</a></li>
          <li><a class="dropdown-item" href="exterior.html">Kültér</a></li>
          <li><a class="dropdown-item" href="utilities.html">Közművek</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <button class="btn" id="login-button">
    <a class="nav-link" id="login" aria-current="page" href="./login.php">Bejelentkezés</a>
  </button>
</div>
</nav>`);
