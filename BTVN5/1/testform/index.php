<?php
session_start();

// Lấy dữ liệu từ session (nếu có)
if (isset($_SESSION['data'])) {
    $data = unserialize($_SESSION['data']);
} else {
    $data = array();
}

// Lấy danh sách các danh mục
$categories = array_keys($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh mục và sản phẩm</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bt5.css">

</head>
<body>
    <div class="container">
        <!-- Form để thêm danh mục -->
        <form action="xuly.php" method="post">
            <div class="form-group">
                <label for="danhmuc">Danh mục:</label>
                <input type="text" class="form-control" id="danhmuc" name="danhmuc">
            </div>
            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        </form>

        <!-- Form để thêm sản phẩm -->
        <form action="xuly.php" method="post">
            <div class="form-group">
                <label for="danhmuc_select">Chọn danh mục:</label>
                <select class="form-control" id="danhmuc_select" name="danhmuc_select">
                    <?php
                    foreach ($categories as $category) {
                        echo "<option value=\"$category\">$category</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="sanpham">Sản phẩm:</label>
                <input type="text" class="form-control" id="sanpham" name="sanpham">
            </div>
            <button type="submit" class="btn btn-success" name="them_sanpham">Thêm sản phẩm</button>
        </form>

        <!-- Hiển thị dữ liệu từ $data -->
        <div>
            <?php include("showdata.php") ?>
        </div>
    </div>

</body>
</html>
