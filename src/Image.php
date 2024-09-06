<?php

namespace App;

use PDO;

class Image
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }


    public function addImage(int $ads_id, string $name)
    {
        $query = "INSERT INTO ads_image (ads_id, name) VALUES (:ads_id, :name)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':ads_id', $ads_id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        return $stmt->execute();

    }
    public  function  getImagesByAdId(int $adsId)
    {

        $query = "SELECT * FROM ads_image WHERE ads_id = :ads_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':ads_id', $adsId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);

    }
    public function updateImage( $id, string $name): bool
    {
        $query = "UPDATE ads_image SET name = :name WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':name', $name);
        return $statement->execute();
    }


    public function handleUpload()
    {
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            if($_FILES['image']['error'] == 4)
                return 'default2.jpg';
            exit('Error: '. $_FILES['image']['error']);
        }

        $name = $_FILES['image']['name'];
        $path = $_FILES['image']['tmp_name'];

        $uploadPath = basePath("/public/assets/images/ads");
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }
        $filename = uniqid() . "___" . $name;
        $fullFilePath  = "$uploadPath/$filename";
        $fileUploaded = move_uploaded_file($path, $fullFilePath);

        if (!$fileUploaded) {
            echo "Rasm yuklashda xatolik yuz berdi";
            exit();
        }


        return $filename;
    }


}