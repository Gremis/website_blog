<?php
include ("path.php");
include (ROOT_PATH . "/app/controllers/topics.php"); ?>


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
  <title>Blog Gremis</title>
</head>
<body>

  <?php include (ROOT_PATH . '/app/includes/header.php');?>
  <?php include (ROOT_PATH . '/app/includes/messages.php'); ?>

  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- Posts Slider -->
    <div class="posts-slider">
      <h1 class="slider-title">Publicaciones de tendencia</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>
      <div class="posts-wrapper">
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_7.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Un día tu vida pasará ante tus ojos</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Gremis Tovar
                  &nbsp;
                  <i class="fa fa-calendar"></i> 12 de agosto 2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_6.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Un día tu vida pasará ante tus ojos</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Gremis Tovar
                  &nbsp;
                  <i class="fa fa-calendar"></i> 12 de agosto 2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_5.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Un día tu vida pasará ante tus ojos</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Gremis Tovar
                  &nbsp;
                  <i class="fa fa-calendar"></i> 12 de agosto 2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_4.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Un día tu vida pasará ante tus ojos</a></h3>
              <div>
                <i class="fa fa-user-o"></i> Gremis Tovar
                &nbsp;
                <i class="fa fa-calendar"></i> 12 de agosto 2020
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Posts Slider -->
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Publicaciones Recientes</h1>
        <div class="post clearfix">
          <img src="assets/images/image_1.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Las canciones más fuertes y dulces aún quedan por cantar</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Gremis Tovar
              &nbsp;
              <i class="fa fa-calendar"></i> 12 de agosto 2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Leer Más</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_2.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Ese amor es todo lo que hay, es todo lo que sabemos del amor</h2></a>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Gremis Tovar
              &nbsp;
              <i class="fa fa-calendar"></i> 12 de agosto 2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Leer Más</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_3.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Haz cualquier cosa, pero deja que produzca alegría</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Gremis Tovar
              &nbsp;
              <i class="fa fa-calendar"></i> 12 de agosto 2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Leer Más</a>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
        <!-- // Search -->
        <!-- topics -->
        <div class="section topics">
          <h2>Tópicos</h2>
          <ul>
           <?php foreach ($topics as $key => $topic): ?>
            <li><a href="#"><?php echo $topic['name']; ?></a></li>
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