<?php

class Menu extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $data['username'] = $this->getUsername();
        $catalog = '<div class="catalog">';
        $products_model = $this->loadModel('ProductsModel');
        $type_array = array("coffee", "cookie", "fresh", "merch", "mini-cake", "pretzel");
        foreach ($type_array as $type) {
            $background = $products_model->getProduct($type);
            $catalog = $catalog . '<div class="product" style="background-image:url(\'' . URL . 'public/images/' . $background[0]->photo_path . '\') !important">';
            $type_link = '';
            switch ($type) {
                case 'coffee':
                    $type_link = "Coffees";
                    break;
                case 'cookie':
                    $type_link = "Cookies";
                    break;
                case 'fresh':
                    $type_link = "Freshes";
                    break;
                case 'mini-cake':
                    $type_link = "Minicakes";
                    break;
                case 'merch':
                    $type_link = "Merchandise";
                    break;
                case 'pretzel':
                    $type_link = "Pretzels";
                    break;

            }
            $catalog = $catalog . '<a href="' . URL . $type_link . '"><button class="button">' . $type_link . '</button></a>';
            $catalog = $catalog . '</div>';
        }
        $catalog = $catalog . '</div>';
        $data['catalog'] = $catalog;
        $this->view('menu/index', $data);
    }
}
