<?php

class ProductoModel extends Dao {

    public $id;
    public $nombre;
    public $tipo;
    public $descripcion;
    public $imagen;
    public $estado;

    public function insert() {

        $stmt = 'INSERT INTO producto (Nombre,Tipo,Descripcion,Imagen,Fecha) '
                . 'VALUES (:nombre,:tipo,:descripcion,:imagen,now())';

        $parameters [':nombre'] = $this->nombre;
        $parameters [':tipo'] = $this->tipo;
        $parameters [':descripcion'] = $this->descripcion;
        $parameters [':imagen'] = $this->imagen;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function select() {

        $stmt = 'SELECT producto.*, tipo_producto.Nombre AS Tip '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE Estado = 1';

        return $this->resultQuery($stmt, array());
    }

    public function selectById() {

        $stmt = 'SELECT producto.*, tipo_producto.Nombre AS Tip, '
                . 'DATE_FORMAT(producto.Fecha,"%d/%m/%Y - %H:%i") AS Fecha '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE producto.Id = :id && Estado = 1';

        $parameters [':id'] = $this->id;

        return $this->resultQueryAssoc($stmt, $parameters);
    }

    public function selectAllById() {

        $stmt = 'SELECT producto.*, tipo_producto.Nombre AS Tip, '
                . 'DATE_FORMAT(producto.Fecha,"%d/%m/%Y - %H:%i") AS Fecha '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE producto.Id = :id';

        $parameters [':id'] = $this->id;

        return $this->resultQueryAssoc($stmt, $parameters);
    }

    public function selectByTypeLimit($min) {

        $stmt = 'SELECT producto.*, tipo_producto.Nombre AS Tip, tipo.Categoria '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE tipo_producto.Id = :tipo && Estado = 1 '
                . 'LIMIT ' . $min . ',16 ';

        $parameters [':tipo'] = $this->tipo;

        return $this->resultQuery($stmt, $parameters);
    }

    public function selectByType() {

        $stmt = 'SELECT producto.*, tipo_producto.Nombre AS Tip '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE tipo_producto.Id = :tipo && Estado = 1 ';

        $parameters [':tipo'] = $this->tipo;

        return $this->resultQuery($stmt, $parameters);
    }

    public function search() {

        $stmt = 'SELECT producto.Id, producto.Nombre, '
                . 'producto.Estado, producto.Imagen, tipo_producto.Nombre AS Tipo, '
                . 'DATE_FORMAT(producto.Fecha,"%d/%m/%Y - %H:%i") AS Fecha '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE (producto.Nombre LIKE "%":nombre"%" '
                . '|| tipo_producto.Nombre LIKE "%":nombre"%") '
                . '&& Estado = 1 ';

        $parameters [':nombre'] = $this->nombre;

        return $this->resultQuery($stmt, $parameters);
    }

    public function searchDisable() {

        $stmt = 'SELECT producto.Id, producto.Nombre, producto.Precio, producto.Moneda, '
                . 'producto.Estado, producto.Imagen, tipo_producto.Nombre AS Tipo, '
                . 'DATE_FORMAT(producto.Fecha,"%d/%m/%Y - %H:%i") AS Fecha '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE (producto.Nombre LIKE "%":nombre"%" '
                . '|| tipo_producto.Nombre LIKE "%":nombre"%") ';

        $parameters [':nombre'] = $this->nombre;

        return $this->resultQuery($stmt, $parameters);
    }

    public function searchLimit($min) {

        $stmt = 'SELECT producto.Id, producto.Nombre, producto.Precio, producto.Moneda, '
                . 'producto.Imagen,tipo_producto.Nombre AS Tipo, '
                . 'DATE_FORMAT(producto.Fecha,"%d/%m/%Y - %H:%i") AS Fecha '
                . 'FROM producto '
                . 'LEFT JOIN tipo_producto '
                . 'ON producto.Tipo = tipo_producto.Id '
                . 'WHERE (producto.Nombre LIKE "%":nombre"%" '
                . '|| tipo_producto.Nombre LIKE "%":nombre"%" '
                . '|| marca.Nombre LIKE "%":nombre"%") '
                . '&& Estado = 1 '
                . "LIMIT " . $min . ",12 ";

        $parameters [':nombre'] = $this->nombre;

        return $this->resultQuery($stmt, $parameters);
    }

    public function update() {

        $stmt = 'UPDATE producto '
                . 'SET Nombre = :nombre, Tipo = :tipo, '
                . 'Descripcion = :descripcion, Imagen = :imagen, '
                . 'WHERE Id = :id';

        $parameters [':nombre'] = $this->nombre;
        $parameters [':tipo'] = $this->tipo;
        $parameters [':descripcion'] = $this->descripcion;
        $parameters [':imagen'] = $this->imagen;
        $parameters [':id'] = $this->id;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function delete() {

        $stmt = 'DELETE FROM producto '
                . 'WHERE Id = :id';

        $parameters [':id'] = $this->id;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function enable() {

        $stmt = 'UPDATE producto '
                . 'SET Estado = 1 '
                . 'WHERE Id = :id';

        $parameters [':id'] = $this->id;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function disable() {

        $stmt = 'UPDATE producto '
                . 'SET Estado = 0 '
                . 'WHERE Id = :id';

        $parameters [':id'] = $this->id;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function available() {

        $stmt = 'UPDATE producto '
                . 'SET Disponible = :disponible '
                . 'WHERE Id = :id';

        $parameters [':id'] = $this->id;
        $parameters [':disponible'] = $this->disponible;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function totalProducts() {

        $stmt = 'SELECT count(Id) AS Total '
                . 'FROM producto';

        return $this->resultQuery($stmt, array());
    }

    public function selectAvailable() {

        $stmt = 'SELECT count(Id) AS Disponible '
                . 'FROM producto '
                . 'WHERE Disponible = 1';

        return $this->resultQuery($stmt, array());
    }

    public function selectType() {

        $stmt = "SELECT * FROM tipo_producto";

        return $this->resultQuery($stmt, array());
    }

}
