<?php

class UsuarioModel extends Dao {

    public $id;
    public $username;
    public $contrasena;

    public function insert() {

        $stmt = "INSERT INTO usuario (Username,Contrasena)"
                . " VALUES (:username,:contrasena)";

        $parameters [':username'] = $this->username;
        $parameters [':contrasena'] = $this->contrasena;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function select() {

        $stmt = "SELECT * FROM usuario";

        return $this->resultQuery($stmt, array());
    }

    public function selectClient() {

        $stmt = "SELECT * FROM usuario "
                . "WHERE Tipo = 3";

        return $this->resultQuery($stmt, array());
    }

    public function selectById() {

        $stmt = "SELECT * FROM usuario "
                . "WHERE Id = :id";

        $parameters [':id'] = $this->id;

        return $this->resultQuery($stmt, $parameters);
    }

    public function selectClientById() {

        $stmt = "SELECT * FROM usuario "
                . "WHERE Id = :id && Tipo = 3";

        $parameters [':id'] = $this->id;

        return $this->resultQuery($stmt, $parameters);
    }

    public function update() {

        $stmt = "UPDATE usuario "
                . "SET Username = :username, Contrasena = :contrasena "
                . "WHERE Id = :id";

        $parameters [':id'] = $this->id;
        $parameters [':username'] = $this->username;
        $parameters [':contrasena'] = $this->contrasena;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function delete() {

        $stmt = "DELETE FROM usuario "
                . "WHERE Id = :id";

        $parameters [':id'] = $this->id;

        return $this->simpleQuery($stmt, $parameters);
    }

}
