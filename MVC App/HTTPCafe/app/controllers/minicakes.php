<?php
require_once 'app/controllers/product.php';

class MiniCakes extends Controller
{
    public function index()
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('mini-cake');
        $this->view('minicakes/index', $catalog);
    }
}