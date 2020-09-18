<?php
  include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
  </head>
  <body>

    <div class="cd">
       <?php foreach ($database as $key => $cd){ ?>
         <img src="<?php echo $cd['poster']; ?>" alt="">
         <h3><?php echo $cd['title']; ?></h3>
         <p><?php echo $cd['author']; ?></p>
         <p><?php echo $cd['year']; ?></p>
       <?php } ?>
    </div>

  </body>
</html>
