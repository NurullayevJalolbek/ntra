<?php


$Login = (new App\User())->login($_POST['email']);


$email = $Login['email'];
$password = $Login['password'];
$id = $Login['id'];


if ($email == $_POST['email'] && $password == $_POST['password']) {
//    $_SESSION['LOGIN_REGISTER'] = $email;
    $userWithRoles = (new \App\User())->ADMIN($id);

    if ($userWithRoles['role_id'] === \App\Role::ADMIN) {
        redirect("/admin");
    }

    if ($userWithRoles){
        $_SESSION['user'] = [
            'email' => $userWithRoles['email'],
            'id' => $userWithRoles['id'],
            'role_id' => $userWithRoles['role_id'],
            'username' => $userWithRoles['username']
        ];
        redirect("/profile2");
        unset($_SESSION['email_error']);
    }



} else {
    $_SESSION['email_error'] = "Email yoki parol xato";
    redirect("/login");
    exit();
}
