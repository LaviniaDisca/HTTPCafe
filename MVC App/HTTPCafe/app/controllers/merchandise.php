<?php

require_once 'app/controllers/product.php';

class Merchandise extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $obj = new Product();
        $catalog = $obj->getProductCatalog('merch');
        $data['catalog']=$catalog;
        $data['username']=$this->getUsername();
        $this->view('Merchandise/index', $data);
    }
}