<?php 
    class Product{
        private $conn;

        public function __construct($dbConnection){
            $this->conn = $dbConnection;
        }

        public function getAll(){
            $query = "SELECT * FROM products INNER JOIN categories ON products.category_id = categories.id"; 

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function create($name, $price, $stock, $category_id){
            $query = "INSERT INTO products (name, price, stock, category_id) 
            VALUES(:name, :price, :stock, :category_id)";

            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ':name' => $name,
                ':price' => $price,
                ':stock' => $stock,
                ':category_id' => $category_id
            ]);
        }

        public function update($id, $name, $price, $stock, $category_id){
            $query = "UPDATE products
            SET name = :name, price = :price, stock = :stock, category_id = :category_id WHERE id = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ':name' => $name,
                ':price' => $price,
                ':stock' => $stock,
                ':category_id' => $category_id,
                ':id' => $id
            ]);
        }

        public function delete($id){
            $query = "DELETE FROM products WHERE id = :id";

            $stmt = $this->conn->prepare($query);
             $stmt->execute([
                ':id' => $id
            ]);
        }
    }
?>