<?php
require "functions.php";
setPNGHeader();
$alphabet = "aaAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789";
makePNGCaptcha(makeCaptcha($alphabet, 8));
?>
