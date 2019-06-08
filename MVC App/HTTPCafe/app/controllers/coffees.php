<?php

require_once 'app/controllers/product.php';

class Coffees extends Controller
{
    public function index()
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('coffee');
        $data['catalog'] = $catalog;
        $data['username'] = $this->getUsername();
        $this->checkTime();
        $this->view('Coffees/index', $data);
    }
}