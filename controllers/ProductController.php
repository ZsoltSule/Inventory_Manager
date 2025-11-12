<?php 

    require_once __DIR__ . '/../models/Product.php';
    require_once __DIR__ . '/../Classes/Dbh.php';

    class ProductController{
        private $productModel;

        public function __construct(){
            $database = new Dbh();
            $connection = $database->connect();

            $this->productModel = new Product($connection);
        }

        public function index(){
            $products = $this->productModel->getAll();
            include __DIR__ . '/../views/products-list.php';
        }

        public function store(){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $category_id = $_POST['category_id'];
            
        if(!empty($name) && !empty($price)){   
            $this->productModel->create($name, $price, $stock, $category_id);
            header("Location: index.php?action=list");
            exit();
        }
        else{
            echo "Complete all!";
        }
        }

        public function update(){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $category_id = $_POST['category_id'];
            
            if(!empty($name) && !empty($price)){
                $this->productModel->update($id, $name, $price, $stock, $category_id);
                header("Location: index.php?action=list");
                exit();
            }
        }
        
        public function delete(){
            $id = $_GET['id'];
            if(!empty($id)){
                $this->productModel->delete($id);
                header("Location: index.php?action=list");
                exit();
            }
        }

        public function edit(){
            $id = $_GET['id'] ?? null;
            if($id){
                $product = $this->productModel->getById($id);
                include __DIR__ . '/../views/edit-product.php';
            } else {
                header("Location: index.php?action=list");
                exit();
            }   
        }
    }   

?>