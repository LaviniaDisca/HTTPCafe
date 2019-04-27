<?php

require_once 'app/controllers/product.php';

class Freshes extends Controller
{
    public function index()
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('fresh');
        $this->view('Freshes/index', $catalog);
    }
}