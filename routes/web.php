<?php
declare( strict_types = 1 );


use App\Router;
use Controller\AdController;
use Controller\UserController;

Router::get('/', fn() => LoadController("home"));

Router::get('/ads/{id}', function(int $id){
    LoadController("showAd", ['id' => $id]);
});

Router::get("/create/ads", fn() => (new AdController())-> create(), "auth");
Router::post("/create/ads", fn() => LoadController("createAd"));


Router::get("/create/status", fn() => LoadView("dashboard/create-status"));
Router::post("/create/status", fn() => LoadController("create-status"));

Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));



Router::get("/create/branch", fn() => LoadView("dashboard/create-branch"));
Router::post("/create/branch", fn() => LoadController("create-branch"));


Router::get("/login", fn() => LoadView("login"), "guest");
Router::post("/login", fn() => LoadController("login"));


Router::get("/register", fn() => LoadView("register"), "guest");
Router::post("/register", fn() => LoadController("register"));


Router::get("/logout", fn() => (new App\Router()) -> logout());

Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));
Router::get('/admin/branches', fn() => LoadController("brenches"));
Router::get("/admin", fn() => LoadView("dashboard/home"), "auth");
Router::get("/admin/ads", fn() => LoadController("home_ads"), "auth");
Router::get("/admin/users", fn() => LoadView("dashboard/users"), "auth");


Router::get("/profile", fn() => (new UserController()) -> LoadProfile(), "auth");
Router::get("/profile/setting", fn() => (new UserController()) -> ProfileSettingView(), "auth");
Router::post("/profile/setting", fn() => (new UserController()) -> ProfileUpdateUser(), "ath");



Router::get("/lock/scren", fn() => LoadView("lock-screen"), "auth");
Router::post("/lock/scren", fn() => LoadController("lock-screen"), "auth");











Router::ErrorResponse(404);


