<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::count();
        $products = Product::count();
        $users = User::count();
        $this->render('home.index', compact('cates', 'products', 'users'));
    }
}

?>