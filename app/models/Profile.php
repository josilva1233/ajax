<?php

namespace app\models;

class Profile extends Model
{
    protected $table = 'profile';

    public function buscar($nameProfile)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $nameProfile . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }

    public function create($nameProfile)
    {

        $sql = "INSERT INTO {$this->table}(name) values(:name)";

        $create = $this->connection->prepare($sql);
        $create->bindValue(':name', $nameProfile);
        $create->execute();

        return $this->connection->lastInsertId();
    }
}
