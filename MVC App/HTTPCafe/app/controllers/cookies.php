<?php
require_once 'app/controllers/product.php';

class Cookies extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $obj = new Product();
        $catalog = $obj->getProductCatalog('cookie');
        $data['catalog']=$catalog;
        $data['username']=$this->getUsername();
        $this->view('Cookies/index', $data);
    }
}