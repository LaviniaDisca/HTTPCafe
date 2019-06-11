<?php

class Register extends Controller
{
    public function index()
    {
        session_start();
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        if(isset($_SESSION['userID'])){
            $this->forbid();
        }
        if (isset($_SESSION['username_err'])) {
            $data['name'] = $_SESSION['username_err'];
        } else {
            $data['name'] = '';
        }
        unset($_SESSION['username_err']);
        if (isset($_SESSION['email_err'])) {
            $data['email'] = $_SESSION['email_err'];
        } else {
            $data['email'] = '';
        }
        unset($_SESSION['email_err']);
        $this->view('Register/index', $data);
    }

    public function addUser()
    {
        $_SESSION['username_err'] = '';
        $_SESSION['email_err'] = '';
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_model = $this->loadModel('UserModel');
            $used_user = $user_model->exists($username);
            $used_email = $user_model->checkEmail($email);
            echo (string)($used_email);
            if ($used_user) {
                session_start();
                $_SESSION['username_err'] = 'Username already used!';
                header('Location: ' . URL . 'Register');
            } else {
                if ($used_email) {
                    session_start();
                    $_SESSION['email_err'] = 'Email already used!';
                    header('Location: ' . URL . 'Register');
                } else {
                    $last_activity = date('Y-m-d H:i:s', time());
                    $user_model->insert($username, $email, $password, $last_activity);
                    unset($_SESSION['username_err']);
                    unset($_SESSION['email_err']);
                    header('Location: ' . URL . 'Login');
                }
            }
        }
    }
}
