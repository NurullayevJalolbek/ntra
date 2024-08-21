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


    public function handleUpload()
    {
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            exit('Error: ' . $_FILES['image']['error']);
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