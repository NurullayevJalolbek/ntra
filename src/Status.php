<?php

namespace App;
use PDO;
class Status
{
    private  PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public  function create($name)
    {

        $sql = "INSERT INTO status (name) VALUES (:name)";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> execute();

    }

    public  function  updateStatus($id, $name)
    {

        $sql = "UPDATE status SET name = :name WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> execute();

    }
    public  function  deleteStatus($id)
    {

        $sql = "DELETE FROM status WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

    }

}