<?php

class TableModel
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

    public function addTableUser($userID, $tableID)
    {
        $sql = "INSERT INTO table_users (table_id, user_id) VALUES (:table_id, :user_id)";
        $query = $this->db->prepare($sql);
        $query->execute(array(":table_id" => $tableID, ":user_id" => $userID));
    }

    public function removeTableUser($userID)
    {
        $sql = "DELETE FROM table_users where user_id=" . $userID;
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function isFull($tableID)
    {
        $sql = "SELECT * FROM table_users where table_id = " . $tableID;
        $seats = "Select seats from tables where id = " . $tableID;
        $query2 = $this->db->prepare($seats);
        $query = $this->db->prepare($sql);
        $query->execute();
        $query2->execute();
        $result = $query2->fetch(PDO::FETCH_ASSOC);
        if ($query->rowCount() == $result['seats']) {
            return true;
        } else
            return false;
    }

    public function getTables()
    {
        $sql = "SELECT * FROM tables";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function checkUserSeated($userID)
    {

        $sql = "SELECT * FROM table_users where user_id =". $userID;
        $query = $this->db->prepare($sql);
        $query->execute();
        if($query->rowCount() >0)
            return true;
        return false;
    }
}



