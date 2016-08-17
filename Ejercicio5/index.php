<?php
/**
 * Created by PhpStorm.
 * User: Fredy
 * Date: 2016-08-16
 * Time: 10:07
 */
require_once ('Main.php');
?>
<html>
    <head><tittle></tittle></head>
    <body>
    <form action="Main.php" >
        <label for="nameUser">Usuario</label>
        <input type="text" id="nameUser" name="nameUser"><br>
        <label for="salaryBase">Salario base</label>
        <input type="text" id="salaryBase" name="salaryBase"><br><hr>
        <p><spam>Productos</spam></p>
        <label for="nameItem">Nombre</label>
        <input type="text" id="nameItem" name="nameItem"><br>
        <label for="quantity">Cantidad</label>
        <input type="text" id="quantity"><br>
        <label for="price">Precio</label>
        <input type="text" id="price"><hr>
    </form>
    <input type="submit" value="Calcular comisión">

    </body>
</html>
