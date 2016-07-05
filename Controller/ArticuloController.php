<?php

class ArticuloController extends ArticuloModel {

    public function get() {

        $this->titulo = $_POST['titulo'];
        $this->resumen = $_POST['resumen'];
        $this->texto = $_POST['texto'];
    }

    public function ingresar() {

        if (isset($_POST['submit'])) {

            $this->get();

            if (isset($_FILES['imagen']) && $_FILES['imagen']['name']) {

                $this->imagen = $_FILES['imagen']['name'];

                $target_path = "View/Img/Articulos/";
                $target_path = $target_path . basename($_FILES['imagen']['name']);

                move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
            } else {
                $this->imagen = "ImgDft.jpg";
            }

            if ($this->insert()) {
                $msj = "ok";
            }
        }

        include ('View/Admin/Articulos/IngresarArticulo.php');
    }

    public function eliminar() {

        if (isset($_GET['id'])) {

            $this->id = $_GET['id'];

            if ($this->delete()) {
                echo '<div class="alert alert-success">'
                . '<button class="close" data-dismiss="alert">x</button>'
                . '<p>Articulo eliminado con Exito</p>'
                . '</div>';
            } else {
                echo '<div class="alert alert-danger">'
                . '<button class="close" data-dismiss="alert">x</button>'
                . '<p>Error, no se pudo eliminar</p>'
                . '</div>';
            }
        }
    }

    public function listar() {

        $articulos = $this->select();

        include ('View/Admin/Articulos/ListarArticulo.php');
    }

    public function actualizar() {

        if (isset($_POST['submit'])) {

            $this->id = $_GET['id'];

            $this->get();

            if (isset($_FILES['imagen']) && $_FILES['imagen']['name']) {

                $this->imagen = $_FILES['imagen']['name'];

                $target_path = "View/Img/Articulos/";
                $target_path = $target_path . basename($_FILES['imagen']['name']);

                move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
            } else {
                $this->imagen = $_POST['actual'];
            }

            if ($this->update()) {
                $msj = "ok";
            }
        }

        if (isset($_GET['id'])) {

            $this->id = $_GET['id'];

            $articulo = $this->selectById();
        }

        include ('View/Admin/Articulos/EditarArticulo.php');
    }

}