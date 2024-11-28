<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 900px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .action-links {
        margin-bottom: 20px;
        text-align: center;
    }
    .action-links a {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 5px;
        display: inline-block;
    }
    .action-links a:hover {
        background-color: #0056b3;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
<div class="container">
    <h2>Danh sách bài blog</h2>
    <div class="action-links">
        <a href="./index.php?page=add">Viết bài mới</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Phần giới thiệu</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $key => $blog) : ?>
                <tr>
                    <td><?php echo $blog->id ?></td>
                    <td><a href="./index.php?page=view&id=<?php echo $blog->id ?>"><?php echo $blog->title ?></a></td>
                    <td><?php echo $blog->teaser ?></td>
                    <td><?php echo $blog->content ?></td>
                    <td><?php echo $blog->created ?></td>
                    <td>
                        <a href="./index.php?page=edit&id=<?php echo $blog->id ?>">Chỉnh sửa</a>
                        <a href="./index.php?page=delete&id=<?php echo $blog->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
