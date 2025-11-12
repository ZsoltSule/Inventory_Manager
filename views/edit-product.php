<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Product</h1>
    <a href="index.php?action=list" class="btn">Back to Products List</a>

    <form action="index.php?action=edit&id=<?= $product['id'] ?>" class="general" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $product['name'] ?>" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?= $product['price'] ?>" required step="0.01">

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="<?= $product['stock'] ?>" required>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            <option value="1" <?= $product['category_id'] == 1 ? 'selected' : '' ?>>Electronics</option>
            <option value="2" <?= $product['category_id'] == 2 ? 'selected' : '' ?>>Clothes</option>
            <option value="3" <?= $product['category_id'] == 3 ? 'selected' : '' ?>>Books</option>
        </select>

        <button type="submit">Update Product</button>
    </form>

</body>
</html>