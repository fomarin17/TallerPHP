<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercise three</title>
  </head>
  <body>
    <h2>Exercise three</h2>
      <?php
        require_once 'Main.php';
        $var = new Main();
        echo $var->getFloor1()->getPrice();
        echo '<br>';
        echo $var->getFloor2()->getPrice();
      echo '<br>';
        echo $var->getLocal1()->getPrice();
      echo '<br>';
        echo $var->getLocal2()->getPrice();
      ?>
  </body>
</html>
