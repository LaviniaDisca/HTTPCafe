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
            $catalog = $catalog . '<p class="price">' . $product->price . ' lei' . '</p>';
            $catalog = $catalog . '<form method="post" action="Cart/addToCart">';
            $catalog = $catalog . '<input type="hidden" name="productId" value="' . $product->id . '">';
            $catalog = $catalog . '<input type="submit" value="Add Product" class="button">';
            $catalog = $catalog . '</form>';
            $catalog = $catalog . '</div>';
        }

        $catalog = $catalog . '</div>';
        return $catalog;
    }
}
