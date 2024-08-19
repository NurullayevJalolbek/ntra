<?php
declare(strict_types=1);
use App\Ads;
$title = $_POST['title'];
$description = $_POST['description'];
$address = $_POST['address'];
$rooms = (int) $_POST['rooms'];
$price = (float)$_POST['price'];
$branch = (int)$_POST['branch'];
$gender = $_POST['gender'];

$num = (new Ads())->create($title, $description, 2, 2, 2, $address, $price, $rooms);
header("location: /");
exit();