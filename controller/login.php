<?php



$Login = (new App\User())->login($_POST['email']);



$email = $Login['email'];
$password = $Login['password'];


if ($email == $_POST['email'] && $password == $_POST['password']) {
    $_SESSION['LOGIN_REGISTER'] = $email;
    header("Location: /");
    exit();
} else {
    $_SESSION['email_error'] = "Email yoki parol xato";
    header("Location: /login");
    exit();
}
