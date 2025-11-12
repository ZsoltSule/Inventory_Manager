<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Product</h1>
    <a href="index.php?action=list" class="btn">Back to Products List</a>

    <form action="index.php?action=create" method="POST" class="general">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required step="0.01">

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            <option value="1">Electronics</option>
            <option value="2">Clothes</option>
            <option value="3">Books</option>
        </select>

        <button type="submit">Add Product</button>
    </form>
    
</body>
</html>