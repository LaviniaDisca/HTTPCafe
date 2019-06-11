<?php

class Forbidden extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['userID'])) {
            $model = $this->loadModel('TableModel');
            $model->removeTableUser($_SESSION['userID']);
            unset($_SESSION['userID']);
        }
        $this->view('403/index');
    }
}
