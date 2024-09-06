<?php


use App\Ads;

$ads = (new Ads())->getAds();

loadView("/dashboard/home_ads", ["ads" => $ads]);

