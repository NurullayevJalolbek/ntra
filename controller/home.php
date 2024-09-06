<?php


use App\Ads;

$ads = (new Ads())->getAds();

loadView("/dashboard/ads", ["ads" => $ads]);

