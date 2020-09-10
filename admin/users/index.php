<?php include ("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/users.php"); ?>

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


<?php include (ROOT_PATH . '/app/includes/adminHeader.php');?>

  <div class="admin-wrapper clearfix">

<?php include (ROOT_PATH . '/app/includes/adminSidebar.php');?>

    <!-- Admin Content -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Agregar Usuario</a>
        <a href="index.php" class="btn btn-sm">Administrar Usuario</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Administrar Usuarios</h2>
        
        <?php include (ROOT_PATH . '/app/includes/messages.php');?>

        <table>
          <thead>
            <th>N</th>
            <th>Usuario</th>
            <th colspan="2">Acción</th>
          </thead>
          <tbody>
          <?php foreach ($admin_users as $key => $user): ?>
            <tr class="rec">
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $user['username']; ?><a href="#"></a></td>
              <td><?php echo $user['email']; ?><a href="#"></a></td>
              <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Editar</a></td>
              <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>
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