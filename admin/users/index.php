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
  <title>Admin - Administrar Usuarios</title>
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
        <a href="create.php" class="btn btn-sm">Agregar Usuario</a>
        <a href="index.php" class="btn btn-sm">Administrar Usuario</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Administrar Usuarios</h2>
        <table>
          <thead>
            <th>N</th>
            <th>Usuario</th>
            <th colspan="3">Acción</th>
          </thead>
          <tbody>
            <tr class="rec">
              <td>1</td>
              <td>
                <a href="#">Gremis Tovar</a>
              </td>
              <td>
                <a href="edit.php" class="edit">
                  Editar
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Eliminar
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../../assets/js/script.js"></script>
</body>
</html>