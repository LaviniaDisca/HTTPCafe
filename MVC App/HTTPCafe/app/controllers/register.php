<?php

class Register extends Controller
{
    public function index($name = '')
    {
        $this->view('Register/index');
    }
}
