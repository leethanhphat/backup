<?php
$page = isset($_GET['page'])?$_GET['page']:1;
$page = is_numeric ($page) ?$page:1;
$from = ($page-1)*SO_SP_TREN_TRANG; 
//Xác định tổng số dẫn phẩm
if (isset($_GET['keyword']))
    $result = chayTruyVanTraVeDL ($link,"select count(*) from tbl_danhmuc where ten like '%".$_GET['keyword']."'");
else $result = chayTruyVanTraVeDL ($link,"select count(*) from tbl_danhmuc");
    $row = mysqli_fetch_row($result);
    $total = ceil($row[0]/SO_SP_TREN_TRANG);
    //Xác định các sản phẩm và cần hiển thị cho trang hiện tại 
if(isset($_GET['keyword']))
$result = chayTruyVanTraVeDL ($link, "select * from tbl_danhmuc where ten like '%".$_GET['keyword']."' limit
".$from.", ".SO_SP_TREN_TRANG);
else
$result = chayTruyVanTraVeDL ($link, "select * from tbl_danhmuc limit ".$from.", ".SO_SP_TREN_TRANG);
while($rows= mysqli_fetch_assoc($result)){
echo "<a href='chitiet.php?sp=".$rows['id']."'>
<div class='sp'> 
<h2>".$rows['ten']."</h2> <p>Mô tả: ".$rows['mota']."
</p> <p>Giá: ".$rows['gia']."</p>
</div></a>";
echo "<br style='clear:both;'/>";
echo "<div class='pager'>";
}
for ($i=1; $i<$total; $i++)
if ($i!=$page)
echo " <a href='./?page=".$i. (isset($_GET['keyword']) ?"&keyword=".$_GET['keyword']:"").">$i</a>";
else
echo "<span>$i</span>";
echo "</div>";
?>