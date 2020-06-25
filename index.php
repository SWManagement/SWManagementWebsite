<?php

require_once("controller/PageController.php");

define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
define("IMAGES_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/images/");
define("CSS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/css/");

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

$urls = [
    "project-info" => function(){
        PageController::project();
    },

    "homepage" => function(){
        PageController::index();
    },

    "" => function () {
        ViewHelper::redirect(BASE_URL . "homepage");
    },

    "team-info" => function(){
        PageController::team();
    },

    "pametnizabojnik" => function(){
        PageController::pametnizabojnik();
    },

    "pametnizabojnik-meritve" => function(){
        PageController::meritve();
    }
];

try {
    if (isset($urls[$path])) {
       $urls[$path]();
    } else {
        echo "No controller for '$path'";
    }
} catch (Exception $e) {
    echo "An error occurred: <pre>$e</pre>";
    // ViewHelper::error404();
} 
