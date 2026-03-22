<?php
require_once '../app/core/Router.php';
use App\Core\Router;

$router = new Router();

// Register Routes
$router->add("GET", "/login", "AuthController", "login");
$router->add("GET", "/register", "AuthController", "register");
$router->add("GET", "/profile", "AuthController", "profile");
$router->add("GET", "/skills", "AuthController", "skills");
$router->add("GET", "/list-skills", "AuthController", "listSkills");
$router->add("GET", "/skill-detail", "AuthController", "skillDetail");


$router->run();

?>      
