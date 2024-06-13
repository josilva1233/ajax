<?php

namespace app\models;

class Profile extends Model
{
    protected $table = 'profile';

    public function buscar($name)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $name . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }

    public function create($name)
    {

        $sql = "INSERT INTO {$this->table}(name) values(:name)";

        $create = $this->connection->prepare($sql);
        $create->bindValue(':name', $name);
        $create->execute();

        return $this->connection->lastInsertId();
    }
}
