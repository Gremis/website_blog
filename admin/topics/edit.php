<?php include ("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/topics.php");
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
  <title>Admin - Actualizar Tema</title>
</head>
<body>

<?php include (ROOT_PATH . '/app/includes/adminHeader.php');?>


  <div class="admin-wrapper">


  <?php include (ROOT_PATH . '/app/includes/adminSidebar.php');?>


    <!-- Admin Content -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Agregar Tema</a>
        <a href="index.php" class="btn btn-sm">Administrar Tema</a>
      </div>
      <div class="">


        <h2 style="text-align: center;">Editar Tema</h2>
         <?php include (ROOT_PATH . "/app/helpers/formErrors.php"); ?>
        <form action="edit.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="input-group">
            <label>Nombre</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Descripción</label>
            <textarea class="text-input" name="description" id="body"><?php echo $description; ?></textarea>
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