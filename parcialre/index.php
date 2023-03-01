<?php
    require "Config/Config.php";
    require "Config/Autoload.php";
    //error_reporting(E_ERROR | E_PARSE);

    use Config\Autoload as Autoload;
    use Config\Router as Router;
    use Config\Request as Request;

    autoload::Start();
    
    Router::Route(new Request());
?>