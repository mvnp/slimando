<?php

$app->get("/", "HomeController:index")->setName("home");

$app->group("/auth", function($app){
    # $app->get("/login", "AuthController:login")->setName("auth.login");
    # $app->get("/register", "AuthController:register")->setName("auth.register");
    $app->map(["GET", "POST"], "/login", "AuthController:login")->setName("auth.login");
    $app->map(["GET", "POST"], "/register", "AuthController:register")->setName("auth.register");
});