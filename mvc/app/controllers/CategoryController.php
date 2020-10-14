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

    public function addForm(){
        $this->render('categories.add-form');
    }

    public function saveAddCate(){
        $data = $_POST;
        $model = new Category();
        $model->fill($data);

        $model->save();
        header('location: ' . BASE_URL . 'danh-muc');
    }

    public function saveEditCate(){
        $id = $_POST['id'];
        $model = Category::find($id);
        if($model){
            $model->fill($_POST);
            $model->show_menu = isset($_POST['show_menu'])
                                    ? $_POST['show_menu'] : null;
            $model->save();
        }
        header('location: ' . BASE_URL . 'danh-muc');
    }

    public function editForm()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if(!$model){
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }
        $this->render('categories.edit-form', compact('model'));
    }
}

?>