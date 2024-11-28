<?php 
if (isset($message)) {
    echo "<p class='alert-ìnfo'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h2>
                Thêm sản phẩm
            </h2>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" name="price" class="form-control" placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" placeholder="Nhập mô tả" required></textarea>
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <textarea name="manufacturer" class="form-control" placeholder="Nhập nhà sản xuất" required></textarea>
                </div>
               <button type="submit" class="btn btn-primary">Thêm mới</button>
               <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>

    </div>

</div>
