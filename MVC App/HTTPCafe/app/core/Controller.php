<?php

class Controller
{

    public $db = null;
    public $password_err = "";
    public $email_err = "";

    public function __construct()
    {
        $this->openDatabaseConnection();
    }

    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function loadModel($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model($this->db);
    }

    public function view($view, $data = [])
    {
        require_once 'app/views/' . $view . '.php';
    }

    public function getUsername()
    {
        session_start();
        if (!isset($_SESSION["userID"])) {
            header('Location: ' . URL . 'Login');
        }
        $user_model = $this->loadModel('UserModel');
        $result = $user_model->getUsername($_SESSION["userID"]);
        return $result['username'];
    }

    public function checkTime()
    {
        $user_model = $this->loadModel('UserModel');
        $last_activity = $user_model->getLastActivity($_SESSION['userID']);
        $dteStart = new DateTime($last_activity[0]->last_activity);
        $dteEnd = new DateTime('NOW');
        $dteDiff = $dteStart->diff($dteEnd);
        if ($dteDiff->y > 0 || $dteDiff->m > 0 || $dteDiff->d > 0 || $dteDiff->h > 0 || intval($dteDiff->i) >=30) {
            $model = $this->loadModel('TableModel');
            $model->removeTableUser($_SESSION['userID']);
            unset($_SESSION['userID']);
            header('Location: ' . URL . 'Login');
        }
    }

    public function isAllowed($className, $referer)
    {
        switch ($className) {
            case 'Coffees':
                switch ($referer) {
                    case 'home' :
                        return true;
                    default:
                        return false;
                }
                break;
            default:
                return true;
        }
    }
}
