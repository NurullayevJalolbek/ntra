<?php


use JetBrains\PhpStorm\NoReturn;

function dd($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();

}



function  basePath($path)
{
    return __DIR__.$path;
}
function  LoadView($path, array | null $args = null): void
{
    $file = "/resources/views/pages/$path.php";

    $filePath = basePath($file);

    if (!file_exists($filePath)) {
        echo "fayl topilmadi $filePath";
        return;
    }
    if (is_array($args)) {

        extract($args);
    }
    require_once  $filePath;
}
function  LoadPartials($path, array | null $args = null, bool $LoadFromPublic = true )
{
    if (is_array($args)) {

        extract($args);
    }

    if ( $LoadFromPublic ) {
        $file = "/public/partials/$path.php";
    }else{
        $file = "/resources/views/partials/$path.php";

    }

    require_once  basePath($file );
}
function  LoadController($path, array | null $args = null)
{
    if (is_array($args)) {

        extract($args);
    }
    require_once  basePath("/controller/" . $path . ".php");
}

function  assets( string $path )
{
    $filePath = basePath("/resources/assets/$path");

    if (!file_exists($filePath)) {
        echo "fayl  assets topilmadi $filePath";
        return '';
    }
    return $filePath;



}



function  getUserEmailSession()
{
    if ( isset($_SESSION['LOGIN_REGISTER'])) {

        return $_SESSION['LOGIN_REGISTER'];
    }
    return null;

}


#[NoReturn] function  redirect(string $url):void
{
    header("Location: $url");
    exit();
}


