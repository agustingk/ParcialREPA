<?php

namespace Config;

//str_replace("\ ." , ". / .", dirname(__DIR__));

define("ROOT", dirname(__DIR__) . "/");
//Path to your project's root folder
define("FRONT_ROOT", "/supreme-fishstick/parcialre/");
define("VIEWS_PATH", "Views/");
define("CSS_PATH", FRONT_ROOT . VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT . VIEWS_PATH . "js/");

define("DB_HOST", "localhost");
define("DB_NAME", "final");
define("DB_USER", "root");
define("DB_PASS", "1234");