<?php

$data = isset($_SESSION['data']) ? unserialize($_SESSION['data']) : array();

if (!empty($data)) {
    echo "<h2>Dữ liệu danh mục và sản phẩm</h2>";
    foreach ($data as $danhmuc => $sanphams) {
        echo "<h2>Danh mục: $danhmuc</h2>";
        echo "<ul>";
        foreach ($sanphams as $sanpham) {
            echo "<li>$sanpham</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Không có dữ liệu danh mục và sản phẩm.";
}
?>
