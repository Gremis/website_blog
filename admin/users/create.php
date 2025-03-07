<?php include ("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>


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
  <title>Admin - Crear Usuario Administrador</title>
</head>
<body>

<?php include (ROOT_PATH . '/app/includes/adminHeader.php');?>

  <div class="admin-wrapper clearfix">

<?php include (ROOT_PATH . '/app/includes/adminSidebar.php');?>

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="index.php" class="btn btn-sm">Editar Usuarios</a>
        <a href="index.php" class="btn btn-sm">Administrar Usuarios</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Crear Usuarios</h2>
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <form action="create.php" method="post">
          <!-- <div class="msg error">
            <li>Username required</li>
          </div> -->
          <div class="input-group">
            <label>Usuarios</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Correo Electrónico</label>
            <input type="email" name="email" value="<?php echo $email; ?>"class="text-input">
          </div>
          <div class="input-group">
            <label>Contraseña</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Confirmar Contraseña</label>
            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
          </div>
          <div class="input-group">

          <?php if(isset($admin) && $admin == 1): ?>
            <label>
            <input type="checkbox" name="admin" checked>
            Admin
            </label>
          <?php else: ?>
            <label>
            <input type="checkbox" name="admin">
            Admin
            </label>
          <?php endif; ?>
          </div>
          <div class="input-group">
            <button type="submit" name="create-admin" class="btn">Guardar</button>
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