<?php

    require_once "database.php";

    $organize = "id";
    $order = "ASC";

    if(isset($_GET["organize"]) && isset($_GET["order"])){
        $organize = $_GET["organize"];
        $order = $_GET["order"];
    }

    $sql = "SELECT * FROM products ORDER BY " . $organize . " " . $order;

    $products = select_SQL($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="results">

        <h1>Products Table</h1>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>

        <?php foreach($products as $p): ?>

            <tr>
                <td><?= $p["id"]; ?></td>
                <td><?= $p["name"]; ?></td>
                <td><?= number_format($p["price"], 2); ?></td>
                <td><?= $p["stock"]; ?></td>

            </tr>

        <?php endforeach; ?>

        </table>

        <a href="index.php">
            <button>Search again</button>
        </a>

    </div>

    <div class="results">
        
        <h2>
            print_r de cada produto
        </h2>

        <br>

        <p>
            <?php foreach($products as $p): ?>

                <?php print_r($products); ?>
                <br>

            <?php endforeach; ?>

        </p>
            
    </div>

</body>
</html>