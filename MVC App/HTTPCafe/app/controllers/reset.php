<?php

class Reset extends Controller
{
    public function index()
    {
        session_start();
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        if(!isset($_SESSION['userID'])){
            header('Location: ' . URL . 'Login');
        }
        if (isset($_SESSION['email_err'])) {
            $data['email'] = $_SESSION['email_err'];
        } else {
            $data['email'] = '';
        }
        unset($_SESSION['email_err']);
        if (isset($_SESSION['password_err'])) {
            $data['pass'] = $_SESSION['password_err'];
        } else {
            $data['pass'] = '';
        }
        unset($_SESSION['password_err']);
        $this->view('Reset/index', $data);
    }

    public function change()
    {
        session_start();
        $_SESSION['email_err'] = '';
        $_SESSION['password_err'] = '';
        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $newPass = $_POST['newPassword'];
            $confirmPass = $_POST['confirmPassword'];
            $user_model = $this->loadModel('UserModel');
            $result = $user_model->getUpdate($email);

            if (!empty($result)) {
                if ($email == $result['email']) {
                    $newPass = password_hash($newPass, PASSWORD_DEFAULT);
                    if (password_verify($confirmPass, $newPass)) {
                        unset($_SESSION['email_err']);
                        unset($_SESSION['password_err']);
                        $user_model->updatePass($email, $newPass);
                        header('Location: ' . URL . 'Login'); // redirect
                    } else {
                        //the passwords do not match
                        $_SESSION['password_err'] = 'The passwords do not match!';
                        header('Location: ' . URL . 'Reset');
                    }
                }
            } else {
                $_SESSION['email_err'] = 'Email was not found!';
                header('Location: ' . URL . 'Reset');
            }
        }
    }
}
