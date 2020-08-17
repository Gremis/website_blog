  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="<?php echo BASE_URL . 'index.php' ?>">
        <h1 class="logo-text"><span>Gres</span>Blog</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL . 'index.php' ?>">Inicio</a></li>
        <li><a href="#">Historia</a></li>
        <li><a href="#">Servicios</a></li>
        <!-- <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li> -->
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Gremis Tovar
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="admin/posts/index.php">Tablero</a></li>
            <li><a href="#" class="logout">Salir</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->