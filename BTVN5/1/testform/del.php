<?php
session_start();

if (isset($_POST['xoa_session'])) {
    // Xóa session
    session_unset();
    session_destroy();
}

header('Location: index.php');
?>