<?php include ("path.php"); ?>
<?php include (ROOT_PATH . '/app/controllers/posts.php');


if (isset($_GET['id'])){
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

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
  <link rel="stylesheet" href="assets/css/style.css">
  <title><?php echo $post['title']; ?> | GresBlog</title>
</head>
<body>
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
      'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <?php include (ROOT_PATH . '/app/includes/header.php');?>

  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content single">
        <h2 style="text-align: center;"><?php echo $post['title']; ?></h2>
        <br>
        <?php echo html_entity_decode($post['body']); ?>
      </div>
      <div class="sidebar single">
        <!-- fb page -->
        <div class="fb-page" data-href="https://www.facebook.com/Piece-of-Advice-1055745464557488/"
          data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/Piece-of-Advice-1055745464557488/" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/Piece-of-Advice-1055745464557488/">Consejo</a></blockquote>
        </div>
        <!-- // fb page -->
        <!-- Popular Posts -->
        <div class="section popular">
          <h2>Popular</h2>

      <?php foreach ($posts as $p): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>">
            <a href="#" class="title"><?php echo $p['title']; ?></a>
          </div>
      <?php endforeach; ?>

        </div>
        <!-- // Popular Posts -->
        <!-- topics -->
        <div class="section topics">
          <h2>Temas</h2>
          <ul>
          <?php foreach ($topics as $topic): ?>
            <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name' . $topic['name']; ?>"><li><?php echo $topic['name']; ?></li></a>
          <?php endforeach; ?>
          </ul>
        </div>
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->

  <?php include (ROOT_PATH . '/app/includes/footer.php');?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>