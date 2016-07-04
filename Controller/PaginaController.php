<?php

class PaginaController {

    public function index() {

        $productoModel = new ProductoModel();

        $perfume = $productoModel->countProducts(1);
        $cosmetico = $productoModel->countProducts(2);
        $saude = $productoModel->countProducts(3);
        $make = $productoModel->countProducts(4);


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

    public function mensaje() {
        
        if (isset($_POST['nombre'])) {
            
            $mensajeModel = new MensajeModel();
            
            $mensajeModel->nombre = $_POST['nombre'];
            $mensajeModel->email = $_POST['email'];
            $mensajeModel->telefono = $_POST['telefono'];
            $mensajeModel->texto = $_POST['texto'];
            
            $enviar = $mensajeModel->message();
        
            
            if($enviar){
                echo 'Registrado com succeso';
            }
        }
        
    }
    
}
