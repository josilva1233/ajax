<?php

namespace app\models;

abstract class Model{

    private $connection;

    public function __construct()
    {

    $this->connection = connection::connect();

    }

    public function all()
    {

    $sql = "SELECT * FROM {$this->table}";
    $all = $this->connetion->prepare($sql);
    $all->execute();
    return $all->fetchAll();

    }

}