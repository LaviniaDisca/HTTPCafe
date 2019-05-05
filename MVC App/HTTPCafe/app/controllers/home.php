<?php

class Home extends Controller
{
    public function index()
    {
        $data['username']=$this->getUsername();
        $this->view('home/index', $data);
    }
}
