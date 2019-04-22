<?php

require_once 'app/controllers/product.php';

class Merchandise extends Controller
{
    public function index($name = '')
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('merch');
        $this->view('Merchandise/index', $catalog);
    }
}