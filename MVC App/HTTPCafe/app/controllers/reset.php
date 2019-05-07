<?php

class Reset extends Controller
{
    public function index()
    {
        $this->view('Reset/index');
    }

    public function change()
    {
        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $newPass = $_POST['newPassword'];
            $confirmPass = $_POST['confirmPassword'];
            $user_model = $this->loadModel('UserModel');
            $result = $user_model->getUpdate($email);

            if (!empty($result)) {
                if ($newPass == $confirmPass && $email == $result['email']) {
                    $newPass = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
                    $user_model->updatePass($email, $newPass);
                    header('Location: ' . URL . 'Login'); // redirect
                } else {
                    //the passwords do not match
                }
            }
        }
    }
}
