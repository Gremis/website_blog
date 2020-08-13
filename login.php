<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Inicia Sesión</title>
</head>
<body>
  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Gres</span>Blog</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Historia</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="register.php">Regístrate</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Entrar
          </a>
        </li>
        <!-- <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li> -->
      </ul>
    </nav>
  </header>
  <!-- // header -->
  <div class="auth-content">
    <form action="login.php" method="post">
      <h3 class="form-title">Inicia Sesión</h3>
      <!-- <div class="msg error">
        <li>Username required</li>
      </div> -->
      <div>
        <label>Usuario</label>
        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>Contraseña</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn">Entrar</button>
      </div>
      <p class="auth-nav"><a href="register.php">Regístrate</a></p>
    </form>
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>