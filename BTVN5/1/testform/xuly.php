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

// Xử lý thêm danh mục
if (isset($_POST['danhmuc'])) {
    $danhmucMoi = $_POST['danhmuc'];

    // Thêm danh mục vào mảng $data với tên danh mục
    $data[$danhmucMoi] = array();

    // Lưu mảng $data vào session
    $_SESSION['data'] = serialize($data);

    // Chuyển hướng trang trở lại index.php sau khi thêm danh mục
    header('Location: index.php');
}

// Xử lý thêm sản phẩm
if (isset($_POST['them_sanpham'])) {
    $danhmuc = $_POST['danhmuc_select'];
    $sanpham = $_POST['sanpham'];

    // Thêm sản phẩm vào danh mục
    $data[$danhmuc][] = $sanpham;

    // Lưu mảng $data vào session
    $_SESSION['data'] = serialize($data);

    // Chuyển hướng trang trở lại index.php sau khi thêm sản phẩm
    header('Location: index.php');
}
?>
