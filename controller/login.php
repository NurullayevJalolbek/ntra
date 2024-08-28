<?php


$Login = (new App\User())->login($_POST['email']);


$email = $Login['email'];
$password = $Login['password'];
$id = $Login['id'];


if ($email == $_POST['email'] && $password == $_POST['password']) {
    $_SESSION['LOGIN_REGISTER'] = $email;
    $userWithRoles = (new \App\User())->ADMIN($id);

    if ($userWithRoles['role_id'] === \App\Role::ADMIN) {
        LoadView("dashboard/home");

    }
    header("location: /");
    exit();
} else {
    $_SESSION['email_error'] = "Email yoki parol xato";
    header("Location: /login");
    exit();
}
