<?php

class Register extends Controller
{
    public function index()
    {
        $this->view('Register/index');
    }


    //also check the email...
    public function addUser()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_model = $this->loadModel('UserModel');
            $used = $user_model->exists($username);
            if ($used) {
                //some error message in javascript or idk
            } else {
                $user_model->insert($username, $email, $password);
            }
            header('Location: ' . URL . 'Login'); // redirect
        }
    }
}
