<style>
    .product-detail {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    .product-detail h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .product-detail p {
        font-size: 16px;
        margin-bottom: 10px;
    }
    .product-detail strong {
        color: #555;
    }
    .btn-default {
        display: block;
        width: fit-content;
        margin: 20px auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
    }
    .btn-default:hover {
        background-color: #0056b3;
        color: white;
    }
</style>
<div class="product-detail">
<h2>Chi tiết bài blog</h2>
<div>
    <p><strong>Tiêu đề:</strong> <?php echo $blog->title; ?></p>
    <p><strong>Phần giới thiệu:</strong> <?php echo $blog->teaser; ?></p>
    <p><strong>Nội dung:</strong> <?php echo $blog->content; ?></p>
    <p><strong>Ngày tạo:</strong> <?php echo $blog->created; ?></p>
</div>
<a href="index.php" class="btn btn-default">Quay lại danh sách</a>
</div>