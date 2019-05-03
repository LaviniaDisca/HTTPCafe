<?php

require_once 'app/controllers/register.php';

class Register extends Controller
{
    public function index()
    {
        $this->view('Register/index');
    }
}
