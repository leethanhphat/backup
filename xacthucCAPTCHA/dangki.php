<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Ki</title>
</head>
<body>
<?php include_once "menu.php"; ?>
<form action="xulydangki.php" method="post"> <h3 style="text-align:center; color: #F30; background:black;padding: 5px; ">Đăng Kí</h3>
<div class="frm_row">
<div class="cls caption">Tên tài khoản:</div>
<div class="cls_input">
<input type="text" name="username" value="<?php echo isset($_GET['username'])?$_GET['username']: ""; ?>" />
</div>
</div><br style="clear:both;" />
<div class="frm_row">
<div class="cls caption">Mật khẩu:</div>
<div class="cls_input"><input type="password" name="password" /></div>
</div><br style="clear:both;" /> <div class="frm_row">
<div class="cls caption">Nhắc lại mật khẩu:</div>
<div class="cls_input"><input type="password" name="password2" /></div>
</div><br style="clear:both;" />
<div class="frm_row">
<div class="cls_caption">Email:</div> <div class="cls_input">
<input type="email" name="email" value="<?php echo isset($_GET['email'])?$_GET['email']: ""; ?>" />
</div>
</div><br style="clear: both;" /> <div class="img_row frm_row">
<img src="captcha.php" /><br style="clear:both;" />
<div class="cls_caption">Nhập Captcha:</div> <div class="cls input"><input type="text" name="captcha" /></div>
</div><br style="clear:both;" />
<div class="img_row">
<input type="submit" value="Đăng Kí" /> <input type="reset" value="Xóa Form" />
</form>
</div><br style="clear:both;" />
<?php include_once "msg.php"; ?>
</body> </html>