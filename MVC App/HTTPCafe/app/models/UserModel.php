<?php

class UserModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * searches for a user in the database
     * true if found
     * false if not found
     */

    public function exists($username)
    {
        $sql = "SELECT * FROM users where username='" . $username . "'";
        $query = $this->db->prepare($sql);
        $query->execute();

        if ($query->rowCount() > 0)
            return true;
        else return false;
    }

    public function insert($username, $email, $password, $last_activity)
    {
        $sql = "INSERT INTO users (username, email, password, last_activity) VALUES (:username, :email, :password, :last_activity)";
        $query = $this->db->prepare($sql);
        $query->execute(array(":username" => $username, ":email" => $email, ":password" => $password, ":last_activity" => $last_activity));
    }

    public function updateActivity($newAct, $userID)
    {
        $sql = " UPDATE users set last_activity = '" . $newAct . "' where id = '" . $userID . "' ";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function getLastActivity($userID)
    {
        $sql = "SELECT last_activity FROM users where id='" . $userID . "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }

    public function updatePass($email, $password)
    {
        $sql = " UPDATE users set password = '" . $password . "' where email = '" . $email . "' ";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function getInfo($username)
    {
        $sql = "SELECT * FROM users where username='" . $username . "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function checkEmail($email)
    {
        $sql = " SELECT * from users where email = '" . $email . "' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else
            return false;
    }

    public function getUsername($userID)
    {
        $sql = "SELECT username FROM users where id='" . $userID . "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUpdate($email)
    {
        $sql = "SELECT * FROM users where email='" . $email . "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
}



