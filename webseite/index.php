<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="" method="Post">
            <label for="stock">Stock:</label><br>
            <input type="text" name="stock" value="" ><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php 
            function pre_r( $array )
            {
                $valor = $_POST['stock'];
                $price = exec("python ./python/prices.py $valor 2<&1");
                sleep (5);
            }
        ?>
    </body>
</html>