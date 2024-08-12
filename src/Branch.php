<?php

namespace App;

use PDO;

class Branch
{

    private PDO  $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public  function  create($name, $address)
    {

        $sql = "INSERT INTO branch (name, address, created_at) VALUES (:name, :address, NOW())";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> bindParam(':address', $address, PDO::PARAM_STR);
        $stmt -> execute();

    }
    public  function  updateBranch($id, $name, $address)
    {
        $sql = "UPDATE branch SET name = :name, address = :address WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> bindParam(':address', $address, PDO::PARAM_STR);
        $stmt -> execute();

    }

    public  function  deleteBranch($id)
    {
        $sql = "DELETE FROM branch WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

    }


}