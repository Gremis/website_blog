<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <title>Admin - Actualizar Tema</title>
</head>
<body>
  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Gremis Tovar
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Tablero</a></li>
            <li><a href="#" class="logout">Salir</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
    <ul>
        <li><a href="../posts/index.php">Administrar Publicaciones</a></li>
        <li><a href="../topics/index.php">Administrar Temas</a></li>
        <li><a href="../users/index.php">Administrar Usuarios</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->
    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Agregar Tema</a>
        <a href="index.php" class="btn btn-sm">Administrar Tema</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Actualizar Tema</h2>
        <form action="create.php" method="post">
          <div class="input-group">
            <label>Nombre</label>
            <input type="text" name="name" class="text-input">
          </div>
          <div class="input-group">
            <label>Descripción</label>
            <textarea class="text-input" name="description" id="description"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="update-topic" class="btn" >Actualizar Tema</button>
          </div>
        </form>
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
  <!-- Custome Scripts -->
  <script src="../../assets/js/script.js"></script>
</body>
</html>