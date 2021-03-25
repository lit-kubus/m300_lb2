<!DOCTYPE html><html  >
<head>
    <!--Verbindung zum CSS File-->
    <link rel="stylesheet" href="main.css">

</head>
    <body>
        <!--Titel der Webseite-->
        <div class=title>
            <h1>STONK Website</h1>
        </div>

                <!--Formular für den Submit Button und der Text eingabe-->
        <div class=form>
            <form action="" method="Post">
                <label for="stock">Stock:</label><br>
                <input type="text" name="stock" value="" ><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

        <div class=price-for>
        <?php
            //Variabel für Stock, gehört zum Py Script
            $value = $_POST['stock'];   

            //Variabel für das Py Script
            $price = exec("python3.6 ./python/get_price.py $value 2<&1");
            echo $price;
            //Variabel um das File wo die Daten gespeichert sind einzurichten
            $value_py = file_get_contents( "/var/www/html/python/tmp/stock" );
            $price_py = file_get_contents( "/var/www/html/python/tmp/price" );

            //Text für Abfrage auf Webseite
            echo "Price for: " .$value_py ."is: " .$price_py ;
        ?>
        </div>

        <!--Fusszeile der Webseite-->
        <div class=footer>
            <h3>Copyright von lit-kubus</h3>
        </div>
    </body>
</html>