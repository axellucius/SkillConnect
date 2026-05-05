<?php
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';

use App\Core\Router;
session_start(); 
$router = new Router();

// Auth Routes
$router->add("GET",  "/login",    "AuthController", "login");
$router->add("POST", "/login",    "AuthController", "loginPost");    
$router->add("GET",  "/register", "AuthController", "register");
$router->add("POST", "/register", "AuthController", "registerPost");  
$router->add("POST", "/logout",   "AuthController", "logout");        

$router->add("GET",  "/forgot-password", "AuthController", "forgotPassword");
$router->add("POST", "/forgot-password", "AuthController", "forgotPasswordPost");

// Home Routes
$router->add("GET", "/", "HomeController", "index");
$router->add("GET", "/home", "HomeController", "index");

$router->add("GET", "/profile",     "AuthController", "profile");
$router->add("GET", "/skills",      "AuthController", "skills");
$router->add("GET", "/list-skills", "AuthController", "listSkills");
$router->add("GET", "/skill-detail","AuthController", "skillDetail");

$router->run();
?>