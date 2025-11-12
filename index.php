<?php
    require_once 'controllers/ProductController.php';

    $controller = new ProductController();

    $action = $_GET['action'] ?? 'list';

    switch($action){
        case 'list':
            $controller->index();
            break;
        case 'create':
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $controller->store();
            } else {
                include 'views/create-product.php';
            }
            break;
        case 'edit':
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $controller->update();
            } else {
                $controller->edit();
            }
            break;
        case 'delete':
            $controller->delete();
            break;
        default:
            $controller->index();   
    }
?>

