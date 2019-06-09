<?php

require_once 'app/controllers/product.php';

class Coffees extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $obj = new Product();
        $catalog = $obj->getProductCatalog('coffee');
        $data['catalog'] = $catalog;
        $data['username'] = $this->getUsername();
        $this->view('Coffees/index', $data);
    }
}