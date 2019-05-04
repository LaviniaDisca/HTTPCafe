<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('Login/index');
    }

    public function signIn()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $user_model = $this->loadModel('UserModel');
            $result = $user_model->getInfo($username);
            if ($result->rowCount() > 0) {
                $verify = password_verify($password, $result['password']);
                if ($verify == true) {
                    session_start();
                    $_SESSION['userID'] = $result['id'];
                    if (isset($_SESSION['userID'])) {
                        header('Location: ' . URL . 'Home.php');
                    } else {
                        header('Location: ' . URL . 'Login.php');
                    }
                } else {
                    //handle wrong password
                }
            } else {
                //handle no user found
            }
        }
    }
}
