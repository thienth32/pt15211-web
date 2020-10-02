<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController{

    public function index(){
        $pagesize = 20;
        $pagenumber = 4;
        $offset = ($pagenumber-1)*$pagesize;
        echo "<pre>";
        var_dump(
            Product::take($pagesize)->skip($offset)->get()
        );
    }
}

?>