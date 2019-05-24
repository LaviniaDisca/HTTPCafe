<?php


class Review extends Controller
{
    public function index()
    {
        $data['username']=$this->getUsername();
        $this->view('review/index', $data);
    }
}