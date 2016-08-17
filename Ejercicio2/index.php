<!DOCTYPE html>
<html>
  <head>
    <?php

        session_start();
    ?>
    <meta charset="utf-8">
    <title>Exercise one</title>
  </head>
  <body>
    <h2>Exercise two</h2>
      <form method="post" action="Main.php">
        <label>Call type</label>
        <select id="callType" name="callType">
            <option value="1">Fixed</option>
            <option value="2">Mobile</option>
        </select>
          <label>Time zone</label>
          <select id="timeZone" name="timeZone">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
          </select><br>

            <label>Duration</label>
            <input id="duration" name="duration"><br>
            <label>Destination number</label>
            <input id="origin" name="origin"><br>
            <label>Origin number</label>
            <input id="destination" name="destination"><br>
            <button type="submit">Submit</button>
          <?php
            if(isset($_SESSION["begin"])){
              echo $_SESSION['total'];
            }else{
                echo "<h1>Welcome</h1>";
            }
          ?>
      </form>
  </body>
</html>
