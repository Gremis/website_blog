  <!-- header -->
  <header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
    <h1 class="logo-text"><span>Gres</span>Blog</h1>
    </a>
    <div class="fa fa-bars menu-toggle"></div>
    <nav>
      <ul>
      <?php if(isset($_SESSION['username'])): ?>

        <li><a href="#">Inicio</a></li>
          <li>
            <a href="#" class="userinfo">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['username']; ?>
              <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="dropdown">
              <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Salir</a></li>
            </ul>
          </li>

      <?php endif; ?>
       
      </ul>
    </nav>
  </header>
  <!-- // header -->