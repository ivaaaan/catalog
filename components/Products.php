<?php namespace Iillexial\Catalog\Components;

use Cms\Classes\ComponentBase;
use Iillexial\Catalog\Models\Product;
class Products extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Products Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getProducts()
    {
        return Product::orderBy('id', 'desc')->get();
    }

}