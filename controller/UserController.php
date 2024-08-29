<?php
declare( strict_types = 1 );


namespace Controller;

use App\Ads;

class UserController
{

    public  function  LoadProfile():void
    {
        $ads = (new Ads())-> getUsersAds($_SESSION['user']['id']);
        LoadView("profile", ["ads" => $ads], false);


    }


}