<!DOCTYPE html><html  >
<head>

    <link rel="stylesheet" href="main.css">

</head>
    <body>

        <div id=title>

            <p>STONK Website</p>

        </div>

        <div id=price-for>
        
        <?php
            $valor = $_POST['stock'];
            $price = exec("python3.9 ./python/get_price.py $valor 2<&1");
            $valor_py = file_get_contents( "./python/tmp/stock.txt" );
            $price_py = file_get_contents( "./python/tmp/prices.txt" );
            echo "Price for: " .$valor_py ."is: " .$price_py ;
        ?>

        </div>

        <form action="" method="Post">
            <label for="stock">Stock:</label><br>
            <input type="text" name="stock" value="" ><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>