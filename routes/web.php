<?php
declare( strict_types = 1 );


use App\Router;

Router::get('/', fn() => loadView ("home"));

Router::get('/ads/{id}', function(int $id){
    loadController("showAd", ['id' => $id]);
});

Router::get("create/ads", fn() => loadController("createAd"));
