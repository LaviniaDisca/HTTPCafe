<?php

class ContabilityModel
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

    public function add($userID, $productID, $quantity)
    {
        $sql = "INSERT INTO contability (user_id, product_id, quantity, date) VALUES (:user_id, :product_id, :quantity, :date)";
        $query = $this->db->prepare($sql);
        $data = date("Y-m-d H:i:s", time());
        $query->execute(array(":user_id" => $userID, ":product_id" => $productID, ":quantity" => $quantity, ":date" => $data));
    }
}



