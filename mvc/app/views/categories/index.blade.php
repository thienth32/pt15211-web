@extends('layouts.main')
@section('title', 'Danh sách danh mục')

@section('content')

<h3>Danh sách danh mục</h3>

<table>
    <thead>
        <th>ID</th>
        <th>Cate Name</th>
        <th>Total Product</th>
        <th>
            <a href="add-cate">Add new</a>
        </th>
    </thead>
    <tbody>
        @foreach ($cates as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->cate_name}}</td>
                <td>{{count($item->products)}}</td>
                <td>
                    <a href="edit-cate?id={{$item->id}}">Edit</a>
                    <a href="remove-cate?id={{$item->id}}">Remove</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection