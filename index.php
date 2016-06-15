<?php

session_start();

class ClassAutoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($nombreClase) {
        if (file_exists('Controller/' . $nombreClase . '.php')) {
            $carpeta = 'Controller/';
        } elseif (file_exists('Model/' . $nombreClase . '.php')) {
            $carpeta = 'Model/';
        }

        include_once $carpeta . $nombreClase . '.php';
    }

}

if (isset($_GET['Admin'])) {
    header('Location: index.php?Controller=AdminController&Action=index');
}

if (isset($_GET['Controller']) && $_GET['Controller'] != 'PaginaController') {

    new ClassAutoloader();

    if (isset($_SESSION["Perfume"]) && $_SESSION["Perfume"]) {

        include 'View/Admin/AdminHeader.php';

        if (isset($_GET['Controller'])) {
            $controller = $_GET['Controller'];
        } else {
            $controller = 'AdminController';
        }

        if (isset($_GET['Action'])) {
            $action = $_GET['Action'];
        } else {
            $action = 'index';
        }

        $controller = new $controller();
        $controller->$action();

        include 'View/Admin/AdminFooter.php';
    } else {

        $controller = new LoginController();
        $controller->entrar();
    }
} else {

    new ClassAutoloader();

    //include 'View/Pagina/Front/PaginaHeader.php';

    if (isset($_GET['Controller'])) {
        $controller = $_GET['Controller'];
    } else {
        $controller = 'PaginaController';
    }

    if (isset($_GET['Action'])) {
        $action = $_GET['Action'];
    } else {
        $action = 'index';
    }

    $controller = new $controller();
    $controller->$action();

    //include 'View/Pagina/Front/PaginaFooter.php';
}