@extends('layouts.main')
@section('title', 'Danh sách sản phẩm')
@section('content')
<ul>
    @foreach ($products as $item)
    <li>{{$item->name}} - <b>{{$item->getCateName()}}</b></li>
    @endforeach
</ul>
@endsection