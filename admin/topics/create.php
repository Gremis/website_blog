<?php include ("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/topics.php"); ?>
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
  <title>Admin - Crear Temas</title>
</head>
<body>


<?php include (ROOT_PATH . '/app/includes/adminHeader.php');?>


  <div class="admin-wrapper">


  <?php include (ROOT_PATH . '/app/includes/adminSidebar.php');?>


    <!-- Admin Content -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Agregar Tema</a>
        <a href="index.php" class="btn btn-big">Administrar Temas</a>
      </div>
      <div class="">

      <?php include (ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <h2 style="text-align: center;">Crear Tema</h2>
        <form action="create.php" method="post">
          <div class="input-group">
            <label>Nombre</label>
            <input type="text" name="name" value="<?php echo $name; ?>"  class="text-input">
          </div>
          <div class="input-group">
            <label>Descripción</label>
            <textarea class="text-input" name="description" value="<?php echo $description; ?>" id="body"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="add-topic" class="btn btn-sm" >Guardar Tema</button>
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