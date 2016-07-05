<?php

class ArticuloModel extends Dao {

    public $id;
    public $imagen;
    public $titulo;
    public $resumen;
    public $texto;

    public function insert() {

        $stmt = 'INSERT INTO articulos (Imagen, Titulo, Resumen, Texto, Fecha) '
                . 'VALUES (:imagen, :titulo, :resumen, :texto, now())';

        $parameters [':imagen'] = $this->imagen;
        $parameters [':titulo'] = $this->titulo;
        $parameters [':resumen'] = $this->resumen;
        $parameters [':texto'] = $this->texto;

        return $this->simpleQuery($stmt, $parameters);
    }

    public function select() {

        $stmt = 'SELECT * FROM articulos';

        return $this->resultQuery($stmt, array());
    }
    
    public function selectById() {

        $stmt = 'SELECT * FROM articulos '
                . 'WHERE Id = :id';

        $parameters [':id'] = $this->id;
        
        return $this->resultQueryAssoc($stmt, $parameters);
    }
    
    public function update () {
        
        $stmt = 'UPDATE articulos '
                . 'SET Imagen = :imagen, Titulo = :titulo, Resumen = :resumen '
                . 'Texto = :texto, '
                . 'WHERE Id = :id';
        
        $parameters [':imagen'] = $this->imagen;
        $parameters [':titulo'] = $this->titulo;
        $parameters [':resumen'] = $this->resumen;
        $parameters [':texto'] = $this->texto;
        $parameters [':id'] = $this->id;
        
        return $this->simpleQuery($stmt, $parameters);
    }
    
    public function delete () {
        
        $stmt = 'DELETE FROM articulos '
                . 'WHERE Id = :id';
        
        $parameters [':id'] = $this->id;
        
        return $this->simpleQuery($stmt, $parameters);
    }

}
