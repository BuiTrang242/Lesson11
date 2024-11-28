<h2>Viết bài blog mới</h2>
<form action="./index.php?page=add" method="post">
    <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="teaser">Phần giới thiệu:</label>
        <textarea name="teaser" id="teaser" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" class="form-control" required></textarea>
    </div>
    <div  class="form-group">
    <label for="created">Ngày tạo:</label>
    <input type="date" name="created" id="created" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Lưu bài viết" class="btn btn-primary">
        <a href="index.php" class="btn btn-default">Hủy</a>
    </div>
</form>
