<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN</title>
    <link rel="stylesheet" href="./styles.css" />
    
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
</head>
<body>
    <div class="left">
        <?php
        require_once("controllers/controller.php"); 
        $controller = new Controller(); 
        $controller->invoke();
        ?>    
    </div>

    <div class="mid">
        <?php
        require_once ("controllers/NbaController.php");
        $controller = new NbaController();
        $controller->search();
        ?>
    </div>


    <div class="right">
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
    </div>

    <!-- <div class="ajax">

    <!DOCTYPE html>
    <form>
        <select name="nbas" onchange="showNba(this.value)">
            <?php
            require_once("controllers/NbaController.php");
            $controller = new NbaController_ajax();
            $controller->showNba($_GET["id"]);
            ?>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>NBA player info will be listed here...</b></div>
    <script>
        function showNba(str) {
            if (str === "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "controllers/NbaController.php?id=" + str, true);
                xmlhttp.send();
            }
        }
    </script> -->



    </div>

</body>
</html>


