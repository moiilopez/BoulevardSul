<?php

class PaginaController {

    public function index() {
        include 'View/Page/Home.php';
    }

    public function portfolio() {

        if (isset($_GET['Tipo'])) {
            
            $productoModel = new ProductoModel();
            $productoModel->tipo = $_GET['Tipo'];
            
            $productos = $productoModel->selectByType();

            include 'View/Page/Portfolio.php';
        }
    }

}
