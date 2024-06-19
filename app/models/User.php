<?php

namespace app\models;

class User extends Model
{
    protected $table = 'users';
    protected $id;

    public function buscar($name)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $name . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }
    public function login($email, $password)
    {
        // Prepare a SQL statement with named placeholders
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password";

        // Prepare the SQL statement
        $buscar = $this->connection->prepare($sql);

        // Bind values to the named placeholders
        $buscar->bindValue(':email', $email);
        $buscar->bindValue(':password', $password);

        // Execute the prepared statement
        $buscar->execute();

        // Fetch all rows from the result set
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

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";

        $delete = $this->connection->prepare($sql);
        $delete->bindValue(':id', $id);
        $delete->execute();

        // Verifica se houve alguma linha afetada pelo DELETE
        $rowCount = $delete->rowCount();

        return $rowCount; // Retorna o número de linhas deletadas
    }
}
