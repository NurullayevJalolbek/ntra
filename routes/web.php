<?php
declare( strict_types = 1 );


use App\Router;

Router::get('/ads/{id}', function(int $id){

    loadView(basePath("/controller/showAd.php"), ['id' => $id]);
   // require_once basePath("/controller/showAd.php");
});
