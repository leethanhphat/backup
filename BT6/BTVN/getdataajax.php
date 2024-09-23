<html>
<body>
    <form>
        <select name="nbas" onchange="showNba(this.value)">
            <?php
            require_once("modules/db_module.php");
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select id, name, team from tbl_nba");
            while($rows=mysqli_fetch_assoc($result)) 
                echo "<option value='".$rows["id"]."'>".$rows["team"]." ". $rows["name"]."</option>";
            giaiPhongBoNho ($link, $result);
            ?>
        </select>
    </form>
 <br>
 <div id="txtHint"><b>NBA player info will be listed here...</b></div>
 <script>
 function showNba(str) {
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
        xmlhttp.open("GET", "getnba.php?id=" + str, true);
        xmlhttp.send();
        }
    }
</script>
</body>
</html>