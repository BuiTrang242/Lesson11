<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }
    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        color: #333;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .action-links {
        margin-bottom: 20px;
    }
    .action-links a {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin-right: 10px;
        display: inline-block;
    }
    .action-links a:hover {
        background-color: #0056b3;
    }
</style>
<h2>Danh sách sản phẩm</h2>
<div class="action-links">
    <a href="./index.php?page=add">Thêm mới</a>
    <a href="./index.php?page=find">Tìm kiếm</a>
    <!-- <a href="./index.php?page=view&id=<product_id>">Chi tiết</a> -->
</div>
<table>
    <thead>

        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Nhà sản xuất</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $product) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><a href="./index.php?page=view&id=<?php echo $product->id ?>"><?php echo $product->name ?></a></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->description ?></td>
                <td><?php echo $product->manufacturer ?></td>
                <td>
               
                    <a href="./index.php?page=edit&id=<?= $product->id ?>" class="btn btn-sm">Update</a>
                    <a href="./index.php?page=delete&id=<?= $product->id ?>" class="btn btn-warning btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>