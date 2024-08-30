<?php
declare( strict_types = 1 );


use App\Router;
use Controller\UserController;

Router::get('/', fn() => LoadController("home"));

Router::get('/ads/{id}', function(int $id){
    LoadController("showAd", ['id' => $id]);
});

Router::get("/create/ads", fn() => LoadController("create-AD"), "auth");
Router::post("/create/ads", fn() => LoadController("createAd"));


Router::get("/create/status", fn() => LoadView("dashboard/create-status"));
Router::post("/create/status", fn() => LoadController("create-status"));



Router::get("/create/branch", fn() => LoadView("dashboard/create-branch"));
Router::post("/create/branch", fn() => LoadController("create-branch"));





Router::get("/login", fn() => LoadView("login"), "guest");
Router::post("/login", fn() => LoadController("login"));


Router::get("/register", fn() => LoadView("register"), "guest");
Router::post("/register", fn() => LoadController("register"));


Router::get("/logout", fn() => (new App\Router()) -> logout());

Router::get("/admin", fn() => LoadView("dashboard/home"), "auth");
Router::get("/profile2", fn() => (new UserController()) -> LoadProfile(), "auth");

Router::ErrorResponse(404);


