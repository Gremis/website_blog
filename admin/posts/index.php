<?php include ("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/posts.php"); ?>


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
  <title>Admin - Administrar publicaciones</title>
</head>
<body>

<?php include (ROOT_PATH . '/app/includes/adminHeader.php');?>

  <div class="admin-wrapper clearfix">

<?php include (ROOT_PATH . '/app/includes/adminSidebar.php');?>

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Agregar Publicaciones</a>
        <a href="index.php" class="btn btn-sm">Administrar Publicaciones</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Administrar Publicaciones</h2>

        <?php include (ROOT_PATH . '/app/includes/messages.php');?>

        <table>
          <thead>
            <th>SN</th>
            <th>Título</th>
            <th>Autor</th>
            <th colspan="3">Acción</th>
          </thead>
          <tbody>

          <?php foreach ($posts as $key => $post): ?>
            <tr class="rec">
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $post['title']; ?></td>
              <td>Gremis</td>
              <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Editar</a></td>
              <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Eliminar</a></td>
              
              <?php if ($post['published']): ?>
              <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">Anular Publicación</a></td>
              <?php else: ?>
              <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publicar</a></td>
              <?php endif; ?>
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