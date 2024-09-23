<html>
<body>
<form>
<select name="users" onchange="showUser(this.value)">
<?php
require_once("db_module.php");
$link = null;
taoKetNoi($link);
$result = chayTruyVanTraVeDL($link, "select id, firstname, lastname from tbl_user");
 while($rows=mysqli_fetch_assoc($result)) 
 echo "<option value='".$rows["id"]."'>".$rows["firstname"]."". $rows["lastname"]."</option>";
 giaiPhongBoNho ($link, $result);
 ?>
 </select>
 </form>
 <br>
 <div id="txtHint"><b>Person info will be listed here...</b></div>
 <script>
 function showUser(str) {
    if (str == "") { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } 
    else {
        var xmlhttp = new XMLHttpRequest(); 
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            { 
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getuser.php?id=" + str, true);
        xmlhttp.send();
        }
    }
</script>
</body>
</html>