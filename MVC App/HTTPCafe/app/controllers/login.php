<?php

class Login extends Controller
{
    public function index($name = '')
    {
        $this->view('Login/index');
    }
}
