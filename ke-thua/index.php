<?php
require_once './Product.php';
require_once './User.php';
require_once './Category.php';

$productModel = new Product();
$products = $productModel->all();

// $userModel = new User();
// $users = $userModel->all();

// $cateModel = new Category();
// $cates = $productModel->findOne(93);

/*
1. ở trang index.php lấy ra danh sách tất cả các sản phẩm có trong db
hiển thị dạng table
mỗi dòng của table là 1 bản ghi trong db
2. cuối mỗi dòng thì sẽ có 1 đường link để xóa 
=> xoa.php?id=id của bản ghi

tại trang xoa.php thực hiện xóa sản phẩm dựa vào id sau đó 
điều hướng website về trang index

3. bên cạnh đường dẫn xóa thì sẽ có đường dẫn chi tiết
=> chi-tiet.php?id=id của bản ghi

tại trang chi tiết lấy ra thông tin chi tiết của sản phẩm theo id

tg làm bài: 12h30 -> 1h
*/


?>

<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Image</th>
    <th>Cate_name</th>
    <th>Price</th>
    <th>
        <a href="">Add</a>
    </th>
    </thead>
    <tbody>
        <?php foreach ($products as $pro): ?>
            <tr>
                <td><?= $pro->id ?></td>
                <td><?= $pro->name ?></td>
                <td>
                    <img src="<?= $pro->image ?>" width="70">
                </td>
                <td><?= $pro->getCateName() ?></td>
                <td><?= $pro->price ?></td>
                <td>
                    <a href="">Detail</a>
                    <a href="xoa.php?id=<?= $pro->id ?>">Remove</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>