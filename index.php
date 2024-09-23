<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký thành viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
</head>
<body>
<?php
function thongbao($status, $msg)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "'.$msg.'", "'.$status.'"); setTimeout(function(){ location.href = "/" },2000); </script>');
}
if(isset($_POST['submit']))
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha    = $_POST['g-recaptcha-response'];
    if(!$username || !$password)
    {
        thongbao('error', "Vui lòng nhập đầy đủ thông tin");
    }
    if($username == $password)
    {
        thongbao('error', "Tài khoản và mật khẩu không được giống nhau");
    }
    else
    {
        $secret = '6LdQSKQhAAAAACygwUHL1xsnJlZU5q-QnsFJXIaR'; //Thay thế bằng mã Secret Key của bạn
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captcha);
        $response_data = json_decode($verify_response);
        if($response_data->success)
        {
            $open = fopen('taikhoan.txt', 'a');
            fwrite($open, $username.'|'.$password."\n");
            fclose($open);
            thongbao('success', "Bạn đã đăng ký tài khoản thành công");
        }
        else
        {
            thongbao('error', "Bạn chưa xác minh repcatcha thành công");
        }
        
    }
}
?>
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8" style="float:none;margin:0 auto;">
            <form method="POST">
                <div class="form-group">
                    <label>Tài khoản:</label>
                    <input type="text" class="form-control" name="username"/>
                </div>
                <div class="form-group">
                    <label>Mật khẩu:</label>
                    <input type="text" class="form-control" name="password"/>
                </div>
                <div class="g-recaptcha" data-sitekey="6LdQSKQhAAAAAK4507eWhzHpTDCmSALxE0ki3C__"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="submit">ĐĂNG KÝ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>
</html>