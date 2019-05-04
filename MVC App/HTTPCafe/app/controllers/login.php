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
            foreach ($result as $res) {
                if (!empty($res)) {
                    $verify = password_verify($password, $res->password);
                    if ($verify == true) {
                        session_start();
                        $_SESSION['userID'] = $res->id;
                        if (isset($_SESSION['userID'])) {
                            header('Location: ' . URL . 'Home');
                        } else {
                            header('Location: ' . URL . 'Login');
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
}
