<?php
    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    //use SQLDAO\UserDAO as UserDAO;
    use Models\User as User;
    
    class AuthController{

        public function Index($message = "")
        {
            require_once(VIEWS_PATH. "login.php");
        }

        public function Register($email, $name, $password)
        {
            $userDAO = new UserDAO;

            $user = $userDAO->GetByEmail($email);

            if ($user) {
                header("location: " . FRONT_ROOT . "Auth/ShowRegister");
            }
            
                $user = new User();

                $user->setNombre($name);
                $user->setEmail($email);
                $user->setPassword($password);
        
                $userDAO->add($user);

                header("location: " . FRONT_ROOT . "Auth/ShowLogin");
            
        }

        public function Login($email, $password)
        {
            $userDAO = new UserDAO();
    
            $user = $userDAO->GetByEmail($email);
    
            if ($user && $user->getPassword() == $password) {
    
                session_start();
    
                $_SESSION["email"] = $user->getEmail();
    
                header("location: " . FRONT_ROOT . "User/HomeUser");
            } else {
                header("location: " . FRONT_ROOT . "Auth/ShowLogin");
            }
        }

        public function ShowRegister()
        {
            return require_once(VIEWS_PATH . "sign-up.php");
        }

        public function ShowLogin()
        {
            return require_once(VIEWS_PATH . "login.php");
        }

        public function Logout()
        {
            session_start();
            if ($_SESSION["email"]) {
                session_destroy();
                return header("location: " . FRONT_ROOT . "Auth/ShowLogin");
        }
        }
    }
?>