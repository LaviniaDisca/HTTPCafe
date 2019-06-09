<?php
require_once 'app/controllers/product.php';

class MiniCakes extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $obj = new Product();
        $catalog = $obj->getProductCatalog('mini-cake');
        $data['catalog']=$catalog;
        $data['username']=$this->getUsername();
        $this->view('minicakes/index', $data);
    }
}