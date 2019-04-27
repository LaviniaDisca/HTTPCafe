<?php

class Cart extends Controller
{
    public function index()
    {
        //Get items from DB then
        $this->view('Cart/index');
    }

    public function addToCart()
    {
        if (isset($_POST['productId']))
            echo $_POST['productId']; //insert into DB
        header('Location: ' . URL . 'Cart'); // redirect
    }
    public function removeFromCart()
    {
        if (isset($_POST['productId']))
            echo $_POST['productId']; //remove from DB
        header('Location: ' . URL . 'Cart'); // redirect
    }
}