<?php

namespace app\models;

class User extends Model
{
    protected $table = 'users';

    public function buscar($name)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $name . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }

    public function create($name, $email,  $password)
    {

        $sql = "INSERT INTO {$this->table}(name,email,password) values(:name, :email, :password)";

        $create = $this->connection->prepare($sql);
        $create->bindValue(':name', $name);
        $create->bindValue(':email', $email);
        $create->bindValue(':password', $password);
        $create->execute();

        return $this->connection->lastInsertId();
    }
}
