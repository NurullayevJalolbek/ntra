<?php

$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$name = $_POST['name'];
$phone = $_POST['phone_number'];


$Register = (new App\User())->register($email);

if (!$Register) {
    $phone = "+998" . $phone;


    if (strlen($phone) != 13) {
        $_SESSION['phone_error'] = "Telefon raqamni  to'liq  kiriting";
        header("location: /register");
        exit();
    }


    if (strlen($password) < 8) {
        $_SESSION['password_error'] = "Parol   8 tadan kam bo'lmasligi kerak";
        header("location: /register");
        exit();
    }

    $_SESSION['EMAIL'] = $email;
    (new App\User())->create($name, $email, $password, $position, $gender, $phone);
    $_SESSION['LOGIN_REGISTER'] = $email;
    header("Location: /");
    exit();
} else {

    $_SESSION['email_error'] = "Bu email allaqachon ro'yxatdan o'tgan";

    header("Location: /register");
    die();
}
