<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
</head>
<body>  
<?php
require_once("modules/db_module.php");
if (isset($_GET["id"])) 
{
$link = null;
taoKetNoi ($link);
$result = chayTruyVanTraVeDL($link, "select * from tbl_nba where id=".$_GET["id"]);
echo "<table>
<tr>
<th>Name</th>
<th>Team</th>
<th>Pic</th>
</tr>";
while ($rows = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>". $rows['name'] ."</td>";
echo "<td>". $rows['team']."</td>";
echo "<td>". $rows['pic']."</td>";

// echo "<td><img style='height: 150px;' src='" . $nba->getpic() . "'/></td>";

echo "</tr>";
}
echo "</table>";
giaiPhongBoNho ($link, $result);
}
?>
</body>
</html>