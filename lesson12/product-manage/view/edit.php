<h2>Cập nhật thông tin sản phẩm</h2>
<form action="./index.php?page=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $product->id ?>">
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" value="<?php echo $product->name ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="number" name="price" value="<?php echo $product->price ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"><?php echo $product->description ?></textarea>
    </div>
    <div class="form-group">
        <label>Nhà sản xuất</label>
        <textarea name="manufacturer" class="form-control"><?php echo $product->manufacturer ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
    
</form>