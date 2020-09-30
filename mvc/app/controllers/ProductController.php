<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController{
    public function index(){
        echo Product::all();
    }

    public function detail(){
        echo Category::all();
    }
}

?>