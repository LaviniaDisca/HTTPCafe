<?php

class Cart extends Controller
{
    public function index()
    {
        $data['username'] = $this->getUsername();
        $cart_model = $this->loadModel('CartModel');
        $products = $cart_model->getProducts();

        $catalog = '<div class="catalog">';
        $data['order'] = '<form method="post" action="' . URL . 'Cart/clear">';
        $counter = 0;
        foreach ($products as $product) {
            $catalog = $catalog . '<div class="product">';
            $catalog = $catalog . '<img src="public/images/' . $product->photo_path . '" alt="' . $product->name . '">';
            $catalog = $catalog . '<h1>' . $product->name . '</h1>';
            $catalog = $catalog . '<p class="price">' . $product->price . ' lei' . '</p>';
            $catalog = $catalog . '<form method="post" action="Cart/removeFromCart" id="removeForm' . $counter . '">';
            $catalog = $catalog . '<input type="hidden" name="productId" value="' . $product->id . '">';
            $catalog = $catalog . '</form>';
            $catalog = $catalog . '<button type="submit" form="removeForm' . $counter . '" class="button"><span class="remove-sign"><i class="fas fa-times"></i></span><span class="button-text">Remove</span></button>';
            $catalog = $catalog . '</div>';
            $data['order'] = $data['order'] . '<input type="hidden" name="productId' . $counter . '" value="' . $product->id . '">';
            ++$counter;
        }
        $catalog = $catalog . '</div>';
        $data['order'] = $data['order'] . '<input type="submit" value=" Buy " class="order">';
        $data['order'] = $data['order'] . '</form>';
        $data['catalog'] = $catalog;
        if($counter==0)
            $data['order']='';
        $this->view('Cart/index', $data);
    }

    public function addToCart()
    {
        session_start();
        if (isset($_POST['productId'])) {
            $cart_model = $this->loadModel('CartModel');
            $cart_model->addProduct($_POST['productId'],$_SESSION['userID']);
        }
        header('Location: ' . URL . 'Cart'); // redirect
    }

    public function removeFromCart()
    {
        session_start();
        if(!isset($_SESSION['userID']))
            header('Location: ' . URL . 'Login');
        if (isset($_POST['productId'])) {
            $cart_model = $this->loadModel('CartModel');
            $cart_model->removeProduct($_POST['productId'],$_SESSION['userID']);
        }
        header('Location: ' . URL . 'Cart'); // redirect
    }

    public function clear()
    {
        session_start();
        if(!isset($_SESSION['userID']))
            header('Location: ' . URL . 'Login');
        if(!isset($_POST['productId0']))
            header('Location: ' . URL . 'Home');
        foreach ($_POST as $item) {
            //insert contabil
        }
        $model=$this->loadModel('CartModel');
        $model->clear($_SESSION['userID']);
        header('Location: ' . URL . 'Cart');
    }
}