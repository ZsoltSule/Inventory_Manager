<?php 

    require_once '../models/Product.php';
    require_once '../Classes/Dbh.php';

    class ProductController{
        private $productModel;

        public function __construct(){
            $database = new Dbh();
            $connection = $database->connect();

            $this->productModel = new Product($connection);
        }

        public function index(){
            $products = $this->productModel->getAll();
            include '../views/products-list.php';
        }

        public function store(){
            $this->productModel->create();
        }
    }

?>