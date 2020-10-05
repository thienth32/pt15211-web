<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::all();
        $cates->load(['products']);
        $this->render('home.index', compact('cates'));
    }
}

?>