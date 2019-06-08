<?php

class ProductsModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllProducts($type)
    {
        $sql = "SELECT * FROM products where type='". $type . "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getProduct($type)
    {
        $sql = "SELECT * FROM products where type='". $type . "' order by rand() limit 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}



