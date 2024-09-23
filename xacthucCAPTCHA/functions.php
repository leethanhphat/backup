<?php
// Thiết lập phần header cho ảnh là png và không cho phép sử dụng Cache
function setPNGHeader() {
    header("Content-Type: image/png");
    header("Expires: -1");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
}

// Tạo một xâu CAPTCHA ngẫu nhiên từ các kí tự trong bảng chữ cái và số
function makeCaptcha($source, $len) {
    $c = "";
    for ($i = 0; $i < $len; $i++) {
        $c .= substr($source, rand(0, strlen($source) - 1), 1);
    }
    return $c;
}

// Vẽ CAPTCHA dưới dạng ảnh PNG
function makePNGCaptcha($captcha) {
    $img = imagecreatetruecolor(200, 50);
    //$background = imagecolorallocate($img, 0, 0, 0); // Màu nền trắng
    $color = imagecolorallocate($img, 255, 255, 0);
    imagettftext($img, 25, 5, 10, 45, $color, "UVNNguyenDu.TTF", $captcha);
    imagepng($img);
    imagedestroy($img);
}
?>
