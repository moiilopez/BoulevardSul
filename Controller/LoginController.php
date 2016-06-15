<?php

class LoginController extends LoginModel {

    public function entrar() {

        if (isset($_POST['submit'])) {

            $this->username = $_POST['username'];
            $this->password = $_POST['password'];

            $_SESSION["Perfume"] = $this->Logar();

            if ($_SESSION["Perfume"]) {
                header("location: index.php?Controller=AdminController");
            } else {
                $msj = 'Usuario o Contrseña invalidos';
            }
        }

        include 'View/Admin/Login.php';
    }

    public function salir() {

        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
            echo '<div class="alert alert-defalult">'
            . '<p>Saliendo...</p>'
            . '</div>';
            echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=index.php">';
        }
    }

}
