<?php

class Cart extends Controller
{
    public function index()
    {
        $data['username']=$this->getUsername();
        $cart_model=$this->loadModel('CartModel');
        $products=$cart_model->getProducts();

        $catalog = '<div class="catalog">';

        $counter=0;
        foreach ($products as $product)
        {
            $catalog = $catalog . '<div class="product">';
            $catalog = $catalog . '<img src="public/images/' . $product->photo_path . '" alt="' . $product->name . '">';
            $catalog = $catalog . '<h1>' . $product->name . '</h1>';
            $catalog = $catalog . '<p class="price">' . $product->price . ' lei' . '</p>';
            $catalog = $catalog . '<form method="post" action="Cart/removeFromCart" id="removeForm'.$counter.'">';
            $catalog = $catalog . '<input type="hidden" name="productId" value="' . $product->id . '">';
            $catalog = $catalog . '</form>';
            $catalog = $catalog . '<button type="submit" form="removeForm'.$counter.'" class="button"><span class="remove-sign"><i class="fas fa-times"></i></span><span class="button-text">Remove</span></button>';
            $catalog = $catalog . '</div>';
            ++$counter;
        }
        $catalog=$catalog . '</div>';

        $data['catalog'] = $catalog;
        $this->view('Cart/index',$data);
    }

    public function addToCart()
    {
        session_start();
        if (isset($_POST['productId']))
        {
            $cart_model=$this->loadModel('CartModel');
            $cart_model->addProduct($_POST['productId']);
        }
        header('Location: ' . URL . 'Cart'); // redirect
    }
    public function removeFromCart()
    {
        if (isset($_POST['productId']))
        {
            $cart_model=$this->loadModel('CartModel');
            $cart_model->removeProduct($_POST['productId']);
        }
        header('Location: ' . URL . 'Cart'); // redirect
    }
}