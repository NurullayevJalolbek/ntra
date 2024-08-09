<?php

namespace App;

use PDO;
class User
{
    private  PDO  $pdo;
    public  function  __construct()
    {
        $this -> pdo = DB::connect();
    }

    public  function  create($username, $position, $gender, $phone)
    {

        $sql = "INSERT INTO users (username, position, gender, phone, created_at) VALUES (:username, :position, :gender, :phone, NOW())";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':username', $username, PDO::PARAM_STR);
        $stmt -> bindParam(':position', $position, PDO::PARAM_STR);
        $stmt -> bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt -> bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt -> execute();

    }
    public  function  updateUser($id, $username, $position, $gender, $phone)
    {

        $sql = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> bindParam(':username', $username, PDO::PARAM_STR);
        $stmt -> bindParam(':position', $position, PDO::PARAM_STR);
        $stmt -> bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt -> bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt -> execute();

    }

    public  function  deleteUsers($id)
    {

        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

    }


}