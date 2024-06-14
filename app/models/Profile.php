<?php

namespace app\models;

class Profile extends Model
{
    protected $table = 'profile';

    public function buscar($nameProfile)
    {
        $sql = "SELECT * FROM {$this->table} WHERE nameProfile like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $nameProfile . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }

    public function create($nameProfile)
    {

        $sql = "INSERT INTO {$this->table}(nameProfile) values(:nameProfile)";

        $create = $this->connection->prepare($sql);
        $create->bindValue(':nameProfile', $nameProfile);
        $create->execute();

        return $this->connection->lastInsertId();
    }
}
