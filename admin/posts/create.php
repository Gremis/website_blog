<?php include ("../../path.php"); ?>
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
  <title>Admin - Crear Publicaciones</title>
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
        <h2 style="text-align: center;">Crear Publicaciones</h2>
        <form action="create.php" method="post">
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" class="text-input">
          </div>
          <div class="input-group">
            <label>Cuerpo</label>
            <textarea class="text-input" name="body" id="body"></textarea>
          </div>
          <div class="input-group">
            <label>Tema</label>
            <select class="text-input" name="topic">
              <option>Vida</option>
              <option>Poesía</option>
              <option>Inspiración</option>
              <option>Lección de vida</option>
            </select>
          </div>
          <div class="input-group">
            <label>
              <input type="checkbox" name="publish" /> Publicar
            </label>
          </div>
          <div class="input-group">
            <button type="submit" name="save-post" class="btn">Guardar Publicación</button>
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