<?php
/**
 * Created by PhpStorm.
 * User: Fredy
 * Date: 2016-08-16
 * Time: 10:07
 */

?>
<html>
    <head><tittle></tittle></head>
    <body>
        <form action="Main.php" method="post" >
            <label for="nameUser">Usuario</label>
            <input type="text" id="nameUser" name="nameUser"><br>
            <label for="salaryBase">Salario base</label>
            <input type="text" id="salaryBase" name="salaryBase"><br><hr>
            <p><spam>Productos</spam></p>
            <label for="nameItem">Nombre</label>
            <input type="text" id="nameItem" name="nameItem" value="nuevo"><br>
            <label for="quantity">Cantidad</label>
            <input type="text" id="quantity" name="quantity" value="10"><br>
            <label for="price">Precio</label>
            <input type="text" id="price" name="price" value="130"><hr>
            <input type="submit" value="Ingresar nuevo producto">
        </form>
        <form action="Main.php" method="get">
            <input type="text" id="pay" name="pay" value="true" hidden="false"><hr>
            <input type="submit" value="Obtener pago">
        </form>
    </body>
</html>
