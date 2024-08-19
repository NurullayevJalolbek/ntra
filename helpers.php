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
function  LoadView($path, array | null $args = null)
{
    $filePath = basePath("/public/pages/" . $path . ".php");
    if (!file_exists($filePath)) {
        echo "fayl topilmadi $filePath";
        return;

    }
    if (is_array($args)) {

        extract($args);
    }
    require_once  $filePath;
}
function  LoadPartials($path, array | null $args = null)
{
    if (is_array($args)) {

        extract($args);
    }
    require_once  basePath("/public/partials/" . $path . ".php");
}
function  LoadController($path, array | null $args = null)
{
    if (is_array($args)) {

        extract($args);
    }
    require_once  basePath("/controller/" . $path . ".php");
}


