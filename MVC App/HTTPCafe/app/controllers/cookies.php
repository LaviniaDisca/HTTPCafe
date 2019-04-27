<?php
require_once 'app/controllers/product.php';

class Cookies extends Controller
{
    public function index()
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('cookie');
        $this->view('Cookies/index', $catalog);
    }
}