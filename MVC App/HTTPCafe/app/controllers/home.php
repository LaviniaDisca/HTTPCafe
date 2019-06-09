<?php

class Home extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $data['username'] = $this->getUsername('a');
        $table_model = $this->loadModel('TableModel');
        if($table_model->checkUserSeated($_SESSION['userID']))
            header('Location: ' . URL . 'Menu');
        $tables = $table_model->getTables();


        $catalog = '<div class="catalog">';

        foreach ($tables as $table) {
            $full = $table_model->isFull($table->id);
            $catalog = $catalog . '<div class="product">';
            $catalog = $catalog . '<form action="' . URL . 'Home/addTableUser" method="post" enctype="multipart/form-data" >';
            $catalog = $catalog . '<input type="hidden" name="tableID" value="' . $table->id . '">';
            if (!$full)
                $catalog = $catalog . '<input type="submit" value="  Sit  " name="Seat" class="button">';
            else
                $catalog = $catalog . '<input type="submit" value=" Full " name="Seat" class="button" disabled>';
            $catalog = $catalog . '</form>';
            $catalog = $catalog . '</div>';
        }
        $catalog = $catalog . '</div>';

        $data['catalog'] = $catalog;
        $this->view('home/index', $data);
    }

    public function addTableUser()
    {
        session_start();
        if (isset($_POST['tableID'])) {
            $cart_model = $this->loadModel('TableModel');
            $cart_model->addTableUser($_SESSION['userID'], $_POST['tableID']);
        }
        header('Location: ' . URL . 'Home');
    }
}
