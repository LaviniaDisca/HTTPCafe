<?php
require_once 'app/controllers/login.php';

class Login extends Controller
{
    public function index()
    {
        $this->view('Login/index');
    }
}
