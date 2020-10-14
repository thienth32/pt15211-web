@extends('layouts.main')
@section('title', 'Danh sách sản phẩm')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="">Tìm kiếm</label>
            <input type="text" id="keyword" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <ul id="result"></ul>
</div>
<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>
            Tên sp
        </th>
        <th>Danh mục</th>
        <th>Ảnh</th>
        <th>
            Gallery
        </th>
        <th>
            <a href="" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category->cate_name}}</td>
            <td>
                {{-- <img src="{{$item->image}}" width="70"> --}}
            </td>
            <td>
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#gallery-{{$item->id}}">
                    {{count($item->galleries)}} ảnh
                </button>
            </td>
            <td>
                <a href="" class="btn btn-sm btn-primary">Sửa</a>
                <a href="" class="btn btn-sm btn-danger">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@foreach ($products as $pro)
  <!-- Modal -->
    <div class="modal fade" id="gallery-{{$pro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gallery của sản phẩm {{$pro->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
            @foreach ($pro->galleries as $img)
                <div class="col-4">
                    {{-- <img src="{{$img->img_url}}" class="img-thumbnail"> --}}
                </div>
            @endforeach
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href={{BASE_URL . 'gallery?product-id=' . $pro->id}} class="btn btn-primary">Chi tiết</a>
        </div>
      </div>
    </div>
  </div>
<input type="hidden" id="search-product" value="{{BASE_URL . 'api/search-product'}}"/>
@endforeach
@endsection
@section('js')
    <script>
        $('#keyword').keyup(function(){
            let keyword = $(this).val();
            $.ajax({
                url: $('#search-product').val(),
                method: "post",
                data: {
                    keyword: keyword
                },
                dataType: 'json',
                success: function(response){
                    $('#result').empty();
                    response.forEach(function(item){
                        $('#result').append(`<li>${item.id} - ${item.name}</li>`)
                    });
                }
            })
        })
    </script>
@endsection