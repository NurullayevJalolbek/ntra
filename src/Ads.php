<?php

namespace App;

use PDO;

class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create($title, $description, $user_id, $status_id, $branch_id, $address, $price, $rooms): string|false
    {
        // SQL so'rovini tayyorlash
        $stmt = $this->pdo->prepare("INSERT INTO ads (title, description, user_id, status_id, branch_id, address, price, rooms, created_at) 
                                     VALUES (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())");

        // Parametrlarni bog'lash
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function updateAds($id, $title, $description, $user_id, $status_id, $branch_id, $address, $price, $rooms)
    {
        $sql = "UPDATE ads SET title = :title, description = :description, user_id = :user_id, status_id = :status_id,
               branch_id = :branch_id, address = :address, price = :price, rooms = :rooms WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':status_id', $status_id, PDO::PARAM_INT);
        $stmt->bindParam(':branch_id', $branch_id, PDO::PARAM_INT);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':rooms', $rooms, PDO::PARAM_INT);
        $stmt->execute();

    }

    public function deleteAds(int $id): void
    {

        $sql = "DELETE FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    }

    public function getAd($id)
    {
        $query = "SELECT ads.*, 
                     ads_image.name AS image, 
                     status.name AS status_name, 
                     branch.address AS branch_address
              FROM ads
              JOIN ads_image ON ads.id = ads_image.ads_id
              JOIN status ON ads.status_id = status.id
              JOIN branch ON ads.branch_id = branch.id
              WHERE ads.id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ );
    }


    public function getAds()
    {
        $query = "SELECT *, ads.id AS id, ads.address AS address, ads_image.name AS image
                  FROM ads
                    JOIN branch ON branch.id = ads.branch_id
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id";
        return $this->pdo->query($query)->fetchAll();

//        return $this->pdo->query("SELECT *,ads.id AS id, ads.address AS address  FROM ads  JOIN  branch
//        ON  branch.id = ads.branch_id ")->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getUsersAds(int $userId)
    {
        $query = "SELECT *, ads.id AS id, ads.address AS address, ads_image.name AS image
                  FROM ads
                    JOIN branch ON branch.id = ads.branch_id
                    LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE user_id = $userId"; // FIXME: Prepare userId
        return $this->pdo->query($query)->fetchAll();
    }
}






