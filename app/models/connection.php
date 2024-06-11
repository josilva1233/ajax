<?php

namespace app\models;
use PDO;

class connection{

    public static function connect(){
     $pdo = new PDO("myql:host=localhost;dbname=users;", "root","");
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
     return $pdo;
    }
    
}