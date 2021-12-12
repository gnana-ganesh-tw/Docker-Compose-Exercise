<html>
    <head>
        <title>Docker Compose Example</title>
    </head>

    <body>
        <h1>Lets learn about docker-compose</h1>
        <ul>
            <?php
            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);

            $products = $obj->products;

            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
            ?>
        </ul>
    </body>
</html>
