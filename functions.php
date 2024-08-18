<?php


function dd($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();

}

function getAds()
{
    return (new \App\Ads())->getAds();

}


function  basePath($path)
{
    return __DIR__.$path;
}
function  LoadView($path, array $args)
{
    extract($args);
    require_once  $path;
}

