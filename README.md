# Inventory Manager

Inventory Manager is a simple web application for managing products and categories. It allows users to create, read, update, and delete products and view their associated categories.

## Features

- List all products with their category, price, and stock
- Add new products
- Edit existing products
- Delete products
- Products are linked to categories
- Uses PHP OOP and MVC architecture
- Data stored in a MySQL database
- Basic styling with CSS

## Installation

1. Clone the repository:

```bash
git clone https://github.com/USERNAME/InventoryManager.git

CREATE TABLE categories (
    id INT PRIMARY KEY,
    name VARCHAR(50)
);

INSERT INTO categories (id, name) VALUES (1, 'Electronics'), (2, 'Clothes'), (3, 'Books');

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price DECIMAL(10,2),
    stock INT,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
Open index.php in a browser via your local server.

Usage
Products List: Shows all products with their ID, name, price, stock, and category.

Add Product: Form to add a new product. Requires name, price, stock, and category.

Edit Product: Form to edit an existing product.

Delete Product: Removes a product from the database.

Notes
All database operations use prepared statements for security.

The application follows MVC structure: Models handle data, Views handle display, and Controllers handle logic.
