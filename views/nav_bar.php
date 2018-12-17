<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="../includes/logout.php">Cerrar sesi&oacute;n</a></li>
  <li><a href="#">Actualizar datos</a></li>
  <li class="divider"></li>
  <li><a href="#">Informaci&oacute;n</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><?php echo $_SESSION['name']; ?></a>
    <ul class="right">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gesti&oacute;n<i class="material-icons right">opciones</i></a></li>
    </ul>
  </div>
</nav>