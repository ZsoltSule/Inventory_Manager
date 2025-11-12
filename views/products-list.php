<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Products List</h1>
    <a href="index.php?action=create" class="btn">Add product</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['stock'] ?></td>
                <td><?= $product['category_name'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn">Edit</a>
                    <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="del_btn" onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>