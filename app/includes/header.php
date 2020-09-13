  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="<?php echo BASE_URL . '/index.php' ?>">
        <h1 class="logo-text"><span>Gres</span>Blog</h1>
      </a>
    </div>
    <div class="fa fa-bars menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Inicio</a></li>
        <li><a href="#">Historia</a></li>
        <li><a href="#">Servicios</a></li>

        <?php if(isset($_SESSION['id'])): ?>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
          <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Tablero</a></li>
        <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Salir</a></li>
          </ul>
        </li>
        <?php else: ?>
          <li><a href="<?php echo BASE_URL . '/register.php' ?>">Regístrate</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>"><i class="fa fa-sign-in"></i>Inicia Sesión</a></li>
        <?php endif; ?>
         
      </ul>
      </nav>
  </header>
  <!-- // header -->