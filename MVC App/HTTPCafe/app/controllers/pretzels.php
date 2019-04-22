<?php
require_once 'app/controllers/product.php';

class Pretzels extends Controller
{
    public function index($name = '')
    {
        $obj = new Product();
        $catalog = $obj->getProductCatalog('pretzel');
        $this->view('Pretzels/index', $catalog);
    }
}