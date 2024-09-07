<?php


use App\Role;
use App\User;

$Login = (new App\User())->login($_POST['email']);


$email = $Login['email'];
$password = $Login['password'];
$id = $Login['id'];


if ($email == $_POST['email'] && $password == $_POST['password']) {

    $userWithRoles = (new User())->ADMIN($id);

    if ((int)$userWithRoles['role_id'] === Role::ADMIN) {
        $_SESSION['user'] = [
            'email' => $userWithRoles['email'],
            'id' => $userWithRoles['id'],
            'role_id' => $userWithRoles['role_id'],
            'username' => $userWithRoles['username']
        ];
        redirect("/admin");
    }
    if ($userWithRoles){
//    dd($userWithRoles);
        $_SESSION['user'] = [
            'email' => $userWithRoles['email'],
            'id' => $userWithRoles['id'],
            'role_id' => $userWithRoles['role_id'],
            'username' => $userWithRoles['username']
        ];
        redirect("/profile");
        unset($_SESSION['email_error']);
    }

} else {
    $_SESSION['email_error'] = "Email yoki parol xato";
    redirect("/login");
}
