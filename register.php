<?php include ("path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/users.php"); ?>

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
  <title>Regístrate</title>
</head>
<body>

<?php include (ROOT_PATH . '/app/includes/header.php');?>

  <div class="auth-content">
    <form action="register.php" method="post">
      <h3 class="form-title">Regístrate</h3>

      <?php include (ROOT_PATH . "/app/helpers/formErrors.php"); ?>


      <div>
        <label>Usuario</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Correo Electrónico</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
      </div>
      <div>
        <label>Contraseña</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <label>Confirma Contraseña</label>
        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Registrar</button>
      </div>
      <p class="auth-nav"><a href="<?php echo BASE_URL . 'login.php' ?>">Entrar</a></p>
    </form>
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>