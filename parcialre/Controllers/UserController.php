<?php

namespace Controllers;

use DAO\UserDAO as UserDAO;
//use SQLDAO\UserDAO as UserDAO;
use Models\User as User;

class UserController
{
    function __construct()
    {
        require_once(ROOT . "/Utils/ValidateSession.php");
    }

    public function HomeUser()
    {
        $userDAO = new UserDAO();

        $user = $userDAO->GetByEmail($_SESSION["email"]);

        return require_once(VIEWS_PATH . "homeUser.php");
    }

    public function verShop()
    {
        require_once VIEWS_PATH . "shop.php";
    }

}