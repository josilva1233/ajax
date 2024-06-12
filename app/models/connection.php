<?php

namespace app\models;
use PDO;
use PDOException;

class Connection {

    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=ajax;", "root", "");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            //echo "Conexão bem-sucedida!";
            return $pdo;
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            return null;
        }
    }
}
#teste de conexão com o banco de dados
//$connection = Connection::connect();