<!DOCTYPE html><html  >
<head>

    <link rel="stylesheet" href="main.css">

</head>
    <body>

        <div class=title>
            <h1>STONK Website</h1>
        </div>

        <div class=price-for>
        
        <?php
            $value = $_POST['stock'];
            $price = exec("python3.6 ./python/get_price.py $value 2<&1");
            $value_py = file_get_contents( "./python/tmp/stock" );
            $price_py = file_get_contents( "./python/tmp/price" );
            echo "Price for: " .$value_py ."is: " .$price_py ;
        ?>
<>
        </div>
        <div class=form>
            <form action="" method="Post">
                <label for="stock">Stock:</label><br>
                <input type="text" name="stock" value="" ><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class=footer>
            <h3>Copyright von lit-kubus</h3>
        </div>
    </body>
</html>
