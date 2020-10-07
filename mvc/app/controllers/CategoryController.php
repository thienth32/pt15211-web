<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
    public function index(){
        $cates = Category::all();
        $this->render('categories.index', compact('cates'));
    }
    public function remove(){
        // kiểm tra xem có danh mục với id trên đường dẫn hay không
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        // nếu có thì thực hiện xóa toàn bộ sản phẩm thuộc về danh mục đó đi
        if($model){
            Product::where('cate_id', $id)->delete();
            // thực hiện xóa danh mục
            $model->delete();
        }

        header('location: ' . BASE_URL . 'danh-muc');
        
    }
}

?>