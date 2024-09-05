<?php


use App\Ads;

$ads = (new Ads())->getAds();

loadView("home", ["ads" => $ads]);

