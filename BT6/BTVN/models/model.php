<?php
require_once("models/nba.php"); 
require_once("modules/db_module.php");

class Model{
public function getnbalist()
{
    $link = null;
    taoKetNoi ($link);
    $result = chayTruyVanTraVeDL($link, "select * from tbl_nba");
    $data = array();
    while($rows = mysqli_fetch_assoc($result)){
    $nba = new NBA(
    $rows["id"],
    $rows["name"],
    $rows["team"], 
    $rows["pic"]);
    array_push($data, $nba);
}
    giaiPhongBoNho ($link, $result);
    return $data;
}
public function getnba($id){
    $allnbas = $this->getnbalist();
    foreach($allnbas as $nba) 
        if($nba->getid()===$id)
            return $nba;
    return null;
}


// public function getnbalist_ajax()
// {
// // Model (db_module.php)
// require_once("modules/db_module.php");
// $link = null;
// taoKetNoi($link);
// $result = chayTruyVanTraVeDL($link, "select id, name, team from tbl_nba");
// while($rows=mysqli_fetch_assoc($result)) 
//     echo "<option value='".$rows["id"]."'>".$rows["team"]." ". $rows["name"]."</option>";
// giaiPhongBoNho ($link, $result);
// }
}

?>