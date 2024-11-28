<h2>Chỉnh sửa bài blog</h2>
<form action="./index.php?page=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $blog->id ?>">
    <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" value="<?php echo $blog->title ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="teaser">Phần giới thiệu:</label>
        <textarea name="teaser" id="teaser" class="form-control" required><?php echo $blog->teaser ?></textarea>
    </div>
    <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" class="form-control" required><?php echo $blog->content ?></textarea>
    </div>
    <div classs="form-group">
<label for="created">Ngày tạo:</label>
<input type="date" name="created" id="created" value="<?php echo $blog->created ?>" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="Cập nhật bài viết" class="btn btn-primary">
        <a href="index.php" class="btn btn-default">Hủy</a>
    </div>
</form>
