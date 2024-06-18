<?php

namespace app\models;

class Associate extends Model
{
    protected $table = 'associate';
    protected $id;

    public function buscar($name)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name like ? order by id desc";

        $buscar = $this->connection->prepare($sql);

        $buscar->bindValue(1, '%' . $name . '%');

        $buscar->execute();

        return $buscar->fetchAll();
    }

    public function create($user_id, $profile_id)
    {

        $sql = "INSERT INTO {$this->table}(user_id, profile_id) values(:user_id, :profile_id)";

        $create = $this->connection->prepare($sql);
        $create->bindValue(':user_id', $user_id);
        $create->bindValue(':profile_id', $profile_id);
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
