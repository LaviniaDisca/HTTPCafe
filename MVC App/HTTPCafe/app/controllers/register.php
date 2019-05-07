<?php

class Register extends Controller
{
    public function index()
    {
        $this->view('Register/index');
    }

    public function addUser()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_model = $this->loadModel('UserModel');
            $used_user = $user_model->exists($username);
            $used_email = $user_model->checkEmail($email);
            if ($used_user) {
                //some error message in javascript or idk
            } else {
                if ($used_email) {
                    //email already used err
                } else {
                    $user_model->insert($username, $email, $password);
                }
            }
            header('Location: ' . URL . 'Login'); // redirect
        }
    }
}
