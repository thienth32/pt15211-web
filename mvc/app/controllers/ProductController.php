<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController{
    public function index(){
        $products = Product::all();
        $products->load([
            'galleries',
            'category'
        ]);
        $this->render('products.index', compact('products'));
    }

    public function detail(){
        echo Category::all();
    }
}

?>