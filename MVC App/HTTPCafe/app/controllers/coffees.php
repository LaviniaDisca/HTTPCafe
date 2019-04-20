<?php

require_once 'app/controllers/product.php';

class Coffees extends Controller
{
    public function index($name = '')
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('coffee');
        $this->view('Coffees/index', $catalog);
    }
}