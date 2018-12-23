<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="../home.php" style="color: #FFF;width: 10%; cursor: pointer;"><?php echo $_SESSION['name']; ?></a>
   <a class="navbar-brand" style="color: #FFF;width: 8%; cursor: pointer;"  data-toggle="modal" data-target="#miModal">Consultar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown" style="color: #FFF;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFF;">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../includes/logout.php">Cerrar sesi&oacute;n</a>
          <a class="dropdown-item" href="../user/update_user.php">Actualizar datos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
