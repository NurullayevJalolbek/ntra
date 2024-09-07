<?php
declare( strict_types = 1 );


namespace Controller;

use App\Ads;
use App\Branch;
use App\User;

class UserController
{

    public  function  LoadProfile():void
    {
        $ads = (new Ads())-> getUsersAds((int )$_SESSION['user']['id']);


        LoadView("profile", ["ads" => $ads]);


    }

    public  function  ProfileSettingView()
    {
        $email = $_SESSION['user']['email'];
        $user = (new User())->getUser($email);
        LoadView("profile-setting", ["user" => $user]);

    }

    public function  ProfileUpdateUser()
    {
        $Login = (new User())->login($_SESSION['user']['email']);
        $id = $Login['id'];


        if ($_POST['old_password']
            && $_POST['new_password']
            && $_POST['confirm_password']
            && $_POST['phone_number']){

            if($_POST['new_password'] != $_POST['confirm_password']){
                $_SESSION['password_error'] = "Parollar mos kelmayapdi";
                redirect("/profile/setting");
            }
            if(strlen($_POST['confirm_password']) < 8){
                $_SESSION['password_error'] = "Parol 8 tadan kam bo'lmasligi kerak";
                redirect("/profile/setting");
            }
            $phone = "+998" . $_POST['phone_number'];
            (new User())->updateUserContact($_SESSION['user']['id'], $phone, $_POST['confirm_password']);
            redirect("/profile/setting");
        }



        if ($_POST['email']
            && $_POST['gender']
            && $_POST['position']
            && $_POST['name']){
            $email = $_SESSION['user']['email'];
            $user = (new User())->getUser($email);
            if ($user->email != $_POST['email']) {
                if ((new User())->register($_POST['email'])) {
                    $_SESSION['updateEmail_error'] = "Bu email ro'yxatdan o'tgan";
                    redirect("/profile/setting");
                }
                $_SESSION['user'] = [

                    'email' => $_POST['email'],
                    'id' => $id,
                    'role_id' => $_SESSION['user']['role_id']
                ];
                (new User())->updateUser($user->id, $_POST['email'], $_POST['gender'], $_POST['position'], $_POST['name']);
                redirect("/profile/setting");
            }
            (new User())->updateUser($user->id, $_POST['email'], $_POST['gender'], $_POST['position'], $_POST['name']);
            redirect("/profile/setting");
        }







    }

























}