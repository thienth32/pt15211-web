<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::count();
        $anchorTag = "<script>document.write('thienth poly')</script>";
        $this->render('home.index', [
            'totalCate' => $cates,
            'anchorTag' => $anchorTag
        ]);
    }
}

?>