<?php
declare( strict_types = 1 );


namespace Controller;

use App\Ads;
use App\Branch;

class UserController
{

    public  function  LoadProfile():void
    {
        $ads = (new Ads())-> getUsersAds((int )$_SESSION['user']['id']);


        LoadView("profile", ["ads" => $ads]);


    }


}