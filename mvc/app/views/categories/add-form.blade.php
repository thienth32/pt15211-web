@extends('layouts.main')
@section('title', 'Tạo mới danh mục')
@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h3 class="text-center text-info">Tạo mới danh mục</h3>
        <form action="{{ BASE_URL . "save-add-cate"}}" method="post">
            <div class="form-group">
                <label for="cate_name">Tên danh mục</label>
                <input id="cate_name" type="text" class="form-control" name="cate_name">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="show_menu" id="show_menu" value="1">
                <label class="form-check-label" for="show_menu">Hiển thị ở trang chủ</label>
              </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="desc" 
                    rows="5" class="form-control"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-sm btn-success">Lưu</button>
                <a href="{{BASE_URL }}" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </form>

    </div>
</div>
@endsection