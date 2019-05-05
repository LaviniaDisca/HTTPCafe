<?php

require_once 'app/controllers/product.php';

class Freshes extends Controller
{
    public function index()
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('fresh');
        $data['catalog']=$catalog;
        $data['username']=$this->getUsername();
        $this->view('Freshes/index', $data);
    }
}