<?php

class MensajeModel extends Dao {

    public $nombre;
    public $email;
    public $telefono;
    public $texto;

    public function message() {

        $stmt = 'INSERT INTO mensaje (Nombre,Email,Telefono,Texto) '
                . 'VALUES (:nombre,:email,:telefono,:texto)';

        $parameters [':nombre'] = $this->nombre;
        $parameters [':email'] = $this->email;
        $parameters [':telefono'] = $this->telefono;
        $parameters [':texto'] = $this->texto;

        return $this->simpleQuery($stmt, $parameters);
    }

}
