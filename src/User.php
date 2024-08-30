<?php

namespace App;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create($username, $email, $password, $position, $gender, $phone): void
    {

        $sql = "INSERT INTO users (username, email, password, position, gender, phone, created_at) VALUES (:username, :email, :password, :position, :gender, :phone, NOW())";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function updateUser($id, $username, $position, $gender, $phone)
    {

        $sql = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function deleteUsers($id)
    {

        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    }

    public function register($email): bool
    {
        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }


    public function login($email)
    {

        $sql = "SELECT  id, email , password FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);


    }


    public function ADMIN($usr_id)
    {
        $query = "SELECT users.*, user_roles.role_id FROM users 
            JOIN user_roles ON users.id = user_roles.user_id
                WHERE id = :usr_id ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':usr_id', $usr_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }


}