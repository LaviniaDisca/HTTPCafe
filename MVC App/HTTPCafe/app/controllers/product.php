<?php


class Product extends Controller
{

    public function getProductCatalog($type)
    {
        $products_model = $this->loadModel('ProductsModel');
        $products = $products_model->getAllProducts($type);
        $catalog = '<div class="catalog">';


        foreach ($products as $product) {
            $catalog = $catalog . '<div class="product">';
            $catalog = $catalog . '<img src="public/images/' . $product->photo_path . '" alt="' . $product->name . '">';
            $catalog = $catalog . '<h1>' . $product->name . '</h1>';
            $catalog = $catalog . '<p class="price">' . $product->price. ' lei' . '</p>';
            $catalog = $catalog . '<button class="button"><span class="button-text">Order</span></button>';
            $catalog = $catalog . '</div>';
        }

        $catalog = $catalog . '</div>';
        return $catalog;
    }
}
