<!DOCTYPE html>
<html> <head>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
</head>
<body>
<?php
require_once("db_module.php");
if (isset($_GET["id"])) 
{
$link = null;
taoKetNoi ($link);
$result = chayTruyVanTraVeDL($link, "select * from tbl_user where id=".$_GET["id"]);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>  
<th>Job</th>
</tr>";
while ($rows = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>". $rows['firstname'] ."</td>";
echo "<td>". $rows['lastname']."</td>";
echo "<td>". $rows['age']."</td>";
echo "<td>". $rows['hometown']."</td>";
echo "<td>". $rows['job']."</td>";
echo "</tr>";
}
echo "</table>";
giaiPhongBoNho ($link, $result);
}
?>
</body>
</html>