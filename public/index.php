<?php
require_once '../app/core/Database.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';

require_once '../app/models/User.php';
require_once '../app/models/Project.php';

use App\Core\Router;

session_start(); 

spl_autoload_register(function($class) {
    if (file_exists('../app/controllers/' . $class . '.php')) {
        require_once '../app/controllers/' . $class . '.php';
    } 
    else if (file_exists('../app/models/' . $class . '.php')) {
        require_once '../app/models/' . $class . '.php';
    }
});

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

// Projects Routes
$router->add("GET", "/projects", "ProjectsController", "index");
$router->add("GET", "/projects/create", "ProjectsController", "create");
$router->add("POST", "/projects/store", "ProjectsController", "store");
$router->add("POST", "/projects/delete", "ProjectsController", "delete");

$router->add("GET", "/projects/detail/{id}", "ProjectsController", "detail");

$router->add("GET", "/profile",     "AuthController", "profile");
$router->add("GET", "/skills",      "AuthController", "skills");
$router->add("GET", "/list-skills", "AuthController", "listSkills");
$router->add("GET", "/skill-detail","AuthController", "skillDetail");

$router->run();
?>