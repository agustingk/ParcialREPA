<?php

namespace SQLDAO;

use \Exception as Exception;
use SQLDAO\IModels as IModels;
use Models\User as User;
use SQLDAO\Connection as Connection;

class UserDAO implements IModels
{
    private $connection;
    private $tableName = "users";

    public function Add(User $UserSQL)
    {
        try {

            $queryUser = "INSERT INTO users (nombre, email, password) VALUES (:nombre, :email, :password);";

            $parametersUser["nombre"] = $UserSQL->getNombre();
            $parametersUser["email"] = $UserSQL->getEmail();
            $parametersUser["password"] = $UserSQL->getPassword();

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($queryUser, $parametersUser);

            $userDAO = new UserDAO();

            $user = $userDAO->GetByEmail($UserSQL->getEmail());

            if (!$user) {
                return null;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function GetAll()
    {
        try {

            $UserList = array();

            $query = "SELECT * FROM " . $this->tableName . " WHERE active=true";

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query);

            foreach ($resultSet as $row) {

                $UserSQL = $this->LoadData($row);

                array_push($UserList, $UserSQL);
            }

            return $UserList;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function GetById($id)
    {
        try {
            $query = "SELECT * FROM " . $this->tableName . " WHERE user_id=:id AND active=true";

            $parameters["id"] = $id;

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query, $parameters);

            if (!$resultSet[0]) {
                return null;
            }

            $UserSQL = $this->LoadData($resultSet[0]);

            return $UserSQL;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function GetByEmail($email)
    {
        try {

            $query = "SELECT * FROM " . $this->tableName . " WHERE email=:email AND active=true;";

            $parameters["email"] = $email;

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query, $parameters);

            if (!$resultSet[0]) {
                return null;
            }

            $UserSQL = $this->LoadData($resultSet[0]);

            return $UserSQL;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function Remove($id)
    {
        try {

            $query = "UPDATE " . $this->tableName . " SET active=false WHERE user_id=:id";

            $parameters["id"] = $id;

            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query, $parameters);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function LoadData($resultSet)
    {
        $UserSQL = new User();
        $UserSQL->setId($resultSet["user_id"]);
        $UserSQL->setEmail($resultSet["email"]);
        $UserSQL->setPassword($resultSet["password"]);
        $UserSQL->setNombre($resultSet["nombre"]);

        return $UserSQL;
    }

    public function getTypeById($id)
    {
        try {

            $query = "SELECT * from " . $this->tableName . "where user_id=:id;";

            $parameters["id"] = $id;

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query, $parameters);

            if (!$resultSet[0]) {
                return null;
            }

            return $resultSet[0];
        } catch (Exception $e) {
            throw $e;
        }
    }
}
