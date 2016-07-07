<?php

class Dao {

    protected $connection;
    private $host = "localhost";
    private $dbname = "boulevardsul";
    private $usuario = "root";
    private $senha = "mysql";

    public function simpleQuery($stmt, $parameters) {

        try {

            $this->connection = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};", $this->usuario, $this->senha);

            $this->connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);

            $this->connection->beginTransaction();
            $comand = $this->connection->prepare($stmt);

            if ($parameters != null) {
                foreach ($parameters as $key => $value) {
                    $comand->bindValue($key, $value);
                }
//               var_dump($parameters);
//               var_dump($stmt);
            }
            $comand->execute();
            $this->connection->commit();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            if ($this->connection != null) {
                if ($this->connection->inTransaction()) {
                    $this->connection->rollBack();
                }
            }
            return false;
        } finally {
            if ($this->connection != null) {
                $this->connection = null;
            }
        }
    }

    public function resultQuery($stmt, $parameters) {

        try {

            $this->connection = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};", $this->usuario, $this->senha);

            $this->connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);

            $this->connection->beginTransaction();
            $command = $this->connection->prepare($stmt);

            if ($parameters != null) {
                foreach ($parameters as $key => $value) {
                    $listaRetorno = array();
                    $command->bindValue($key, $value);
                }
            }
//            var_dump($parameters);
//            var_dump($stmt);
            $command->execute();
            $listaRetorno = array();
            for ($i = 0; $row = $command->fetch(PDO::FETCH_ASSOC); $i++) {
                array_push($listaRetorno, $row);
            };
//            var_dump($listaRetorno);
            return $listaRetorno;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            if ($this->connection != null) {
                if ($this->connection->inTransaction()) {
                    $this->connection->rollBack();
                }
            }
            return array();
        } finally {
            //UTILIZADO NA VERSAO DO PHP 5.6 NAS PREVIAS NAO É COMPATÍVEL
            if ($this->connection != null) {
                //FECHA A CONEXAO COM O BANCO DE DADOS
                $this->connection = null;
            }
        }
    }

    public function resultQueryAssoc($stmt, $parameters) {

        try {

            $this->connection = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};", $this->usuario, $this->senha);

            $this->connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);

            $this->connection->beginTransaction();
            $command = $this->connection->prepare($stmt);

            if ($parameters != null) {
                foreach ($parameters as $key => $value) {
                    $listaRetorno = array();
                    $command->bindValue($key, $value);
                }
            }
//            var_dump($parameters);
//            var_dump($stmt);
            $command->execute();
            $listaRetorno = $command->fetch(PDO::FETCH_ASSOC);
//            var_dump($listaRetorno);
            return $listaRetorno;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            if ($this->connection != null) {
                if ($this->connection->inTransaction()) {
                    $this->connection->rollBack();
                }
            }
            return array();
        } finally {
            //UTILIZADO NA VERSAO DO PHP 5.6 NAS PREVIAS NAO É COMPATÍVEL
            if ($this->connection != null) {
                //FECHA A CONEXAO COM O BANCO DE DADOS
                $this->connection = null;
            }
        }
    }

}
