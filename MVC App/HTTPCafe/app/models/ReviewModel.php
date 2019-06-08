<?php

class ReviewModel
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

    public function clearOldReview()
    {
        $sql="DELETE FROM reviews where id in (select * from (select id from reviews limit 1) x)";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function add($userId,$review,$date)
    {
        $this->clearOldReview();
        $sql = "INSERT INTO reviews (user_id, review) VALUES (:user, :review)";
        $query = $this->db->prepare($sql);
        $query->execute(array(":user" => $userId, ":review" => $review));
    }

    public function getReviews()
    {
        $sql = "SELECT username,review FROM reviews INNER JOIN users ON reviews.user_id=users.id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}



