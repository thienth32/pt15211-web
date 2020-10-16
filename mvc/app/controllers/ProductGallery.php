<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;

class ProductGalleryController extends BaseController{
    public function index(){
        $productId = $_GET['id'];
        $productGalleries = ProductGallery::where('product_id', $productId)->get();
        $this->render('product-galleries.index', compact('productGalleries'));
    }

    
}

?>