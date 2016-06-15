<?php

class UsuarioController extends UsuarioModel {

    public function ingresar() {

        if (isset($_POST['submit'])) {

            $this->username = $_POST['username'];
            $this->contrasena = $_POST['contrasena'];

            if (isset($_FILES['imagen']) && $_FILES['imagen']['name']) {

                $this->imagen = $_FILES['imagen']['name'];

                $target_path = "View/Img/Users/";
                $target_path = $target_path . basename($_FILES['imagen']['name']);

                move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
            }

            if ($this->insert()) {
                $msj = "ok";
            }
        }
        include ('View/Admin/Usuario/IngresarUsuario.php');
    }

    public function eliminar() {

        if (isset($_GET['id'])) {

            $this->id = $_GET['id'];

            if ($this->delete()) {
                $msj = '<div class="alert alert-success">
                    <button class="close" data-dismiss="alert">x</button>
                    <p>Usuario eliminado con Exito</p>
                    </div>';
            } else {
                $msj = '<div class="alert alert-success">
                    <button class="close" data-dismiss="alert">x</button>
                    <p>Error, no se pudo eliminar</p>
                    </div>';
            }
        }
        include ('View/Admin/Usuario/EliminarUsuario.php');
    }

    public function listar() {

        $usuarios = $this->select();

        include ('View/Admin/Usuario/ListarUsuario.php');
    }

    public function listarCliente() {

        $usuarios = $this->selectClient();

        include ('View/Admin/Cliente/ListarCliente.php');
    }

    public function actualizar() {

        if (isset($_POST['submit'])) {

            $this->id = $_GET['id'];
            $this->username = $_POST['username'];
            $this->contrasena = $_POST['contrasena'];
            $this->imagen = $_POST['actual'];

            if (isset($_FILES['imagen']) && $_FILES['imagen']['name']) {

                $this->imagen = $_FILES['imagen']['name'];

                $target_path = "View/Img/Users/";
                $target_path = $target_path . basename($_FILES['imagen']['name']);

                move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
            }

            if ($this->update()) {
//                $msj = "ok";
            }
        }

        if ($_GET['id']) {

            $this->id = $_GET['id'];

            $usuario = $this->selectById();
        }

        include ('View/Admin/Usuario/EditarUsuario.php');
    }

}
