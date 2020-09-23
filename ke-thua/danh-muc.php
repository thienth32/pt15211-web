<?php
require_once './Category.php';

$cates = Category::all();
/*
    Hiển thị danh sách danh mục trong database
    id      Cate Name       Number Product
    
    (Number Product là số lượng sản phẩm thuộc
    danh mục đang hiển thị)

*/
?>
<table>
    <thead>
    <th>ID</th>
    <th>Cate Name</th>
    <th>Number product</th>
    <th>
        <a href="">Add</a>
    </th>
    </thead>
    <tbody>
        <?php foreach ($cates as $cate): ?>
            <tr>
            <td><?= $cate->id ?></td>
            <td><?= $cate->cate_name ?></td>
            <td><?= $cate->countProducts() ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>