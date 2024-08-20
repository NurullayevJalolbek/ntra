<?php
declare( strict_types = 1 );


use App\Router;

Router::get('/', fn() => LoadController("home"));

Router::get('/ads/{id}', function(int $id){
    LoadController("showAd", ['id' => $id]);
});

Router::get("/create/ads", fn() => LoadView("dashboard/create-ads"));
Router::post("/create/ads", fn() => LoadController("createAd"));
