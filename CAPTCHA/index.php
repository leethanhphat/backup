<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" charset="utf-8">
    <title>BÀI TẬP CAPTCHA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <img src="captcha" width="300" >     -->
<div class="main" >
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.jpg" alt="Avatar" class="avatar" width="100" height="100" style="border-radius: 50%">
  </div>

  <div class="container">
    <label for="uname"><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Nhập tên đăng nhập" name="uname" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

    <label for="psw"><b>CAPTCHA:</b></label>
    <input type="CAPTCHA" placeholder="Nhập CAPTCHA" name="capt" required>
    <img src="captcha.php" width="150">
    

    <button  type="submit">Đăng nhập</button>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"> <a href="#">Quên mật khẩu hả ba?</a></span>
  </div>
</div>
</form>

</body>
</html>