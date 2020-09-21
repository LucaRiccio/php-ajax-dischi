<?php
  include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <header>
      <img src="logo.png" alt="">
    </header>

    <div class="container-cd">

      <?php foreach ($database as $key => $cd){ ?>
        <div class="cd">
          <img src="<?php echo $cd['poster']; ?>" alt="">
          <h3><?php echo $cd['title']; ?></h3>
          <p><?php echo $cd['author']; ?></p>
          <p><?php echo $cd['year']; ?></p>
        </div>
      <?php } ?>
    </div>

  </body>
</html>
