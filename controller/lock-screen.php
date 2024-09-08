<?php

$user = (new \App\User())->getUser($_SESSION['user']['email']);

if (strlen($_POST['lock_password']) < 8) {
    $_SESSION['password_error'] = "Parol 8 tadan kam bo'lmasligi kerak";
    redirect("/lock/scren");
}
if ($_POST['lock_password'] !== $user->password) {
    $_SESSION['password_error'] = "Parolllar mos kelmayapti";
    redirect("/lock/scren");
}
redirect("/profile");