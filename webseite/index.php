<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
            $valor = $_POST['stock'];
            $price = exec("python ./python/prices.py $valor");
            $value_price = file_get_contents("./python/tmp/prices.txt");
            $name_stock = file_get_contents("./python/tmp/stock.txt");
            echo $value_price .$name_stock; 
        ?>
        <form action="" method="Post">
            <label for="stock">Stock:</label><br>
            <input type="text" name="stock" value="" ><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    
    </body>
</html>