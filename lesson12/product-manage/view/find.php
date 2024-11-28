<h2>Tìm kiếm sản phẩm</h2>
<style>
    .form-group {
        margin-bottom: 15px;
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"], .btn-default {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
    }
    input[type="submit"]:hover, .btn-default:hover {
        background-color: #0056b3;
    }
    .btn-default {
        background-color: #6c757d;
    }
    .btn-default:hover {
        background-color: #ccc;
    }
</style>
<form action="./index.php?page=find" method="post">
    <div class="form-group">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Tìm kiếm" class="btn btn-primary">
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>