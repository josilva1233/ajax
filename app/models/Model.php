<?php

namespace app\models;

abstract class Model{

    protected $connection;
    protected $table;

    public function __construct()
    {

    $this->connection = connection::connect();

    }

    public function all()
    {

    $sql = "SELECT * FROM {$this->table}";
    $all = $this->connection->prepare($sql);
    $all->execute();
    return $all->fetchAll();

    }

}