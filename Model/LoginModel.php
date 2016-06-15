<?php

class LoginModel extends Dao {

    protected $username;
    protected $password;
    protected $email;

    protected function logar() {

        $stmt = "SELECT * "
                . "FROM usuario "
                . "WHERE BINARY contrasena = :contrasena && BINARY username = :username";

        $parameters [':username'] = $this->username;
        $parameters [':contrasena'] = $this->password;

        return $this->resultQueryAssoc($stmt, $parameters);
    }

}
