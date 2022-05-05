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

    <h1>Stationary Store - Search products</h1>

    <div id="form-div">
        <form action="out.php">
            <label for="organize">Organize by</label>
            <select name="organize" required>
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="price">Price</option>
                <option value="stock">Stock</option>
            </select>
            <br><br>

            <label for="order">Ascending</label>
            <input type="radio" name="order" value="ASC" checked required>
            <label for="order">Descending</label>
            <input type="radio" name="order" value="DESC" required>
            <br><br>
            <input type="submit" value="Search">
        </form>
    </div>
    
</body>
</html>