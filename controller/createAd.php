<?php
declare(strict_types=1);

use App\Ads;

$title = $_POST['title'];
$description = $_POST['description'];
$address = $_POST['address'];
$rooms = (int)$_POST['rooms'];
$price = (float)$_POST['price'];
$branch = (int)$_POST['branch'];

if ($_POST['title']
    && $_POST['description']
    && $_POST['address']
    && $_POST['rooms']
    && $_POST['price']) {


    $newAdsId = (new Ads())->create($title, $description, 2, 2, 2, $address, $price, $rooms);


    if ($newAdsId) {
        $imageHandler = new App\Image();
        $filename = $imageHandler->handleUpload();

        if (!$filename) {
            exit("Rasm yuklashda xatolik yuz berdi");
        }

        $imageHandler->addImage((int)$newAdsId, $filename);
        header("Location: /");
        exit();
    }
    return;

}
echo "Hamma bosh maydonlarni to'ldiring";



