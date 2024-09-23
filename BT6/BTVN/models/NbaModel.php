<?php
require_once("modules/db_module.php");
require_once("models/nba.php");

class NbaModel {
    public function searchNbas($keyword) {
        $link = null;
        taoKetNoi($link);

        $sql = "SELECT * FROM tbl_nba WHERE name LIKE '%$keyword%'";
        $result = chayTruyVanTraVeDL($link, $sql);

        $nbas = [];

        while ($rows = mysqli_fetch_assoc($result)) {
            $nba = new NBA(
                $rows["id"],
                $rows["name"],
                $rows["team"],
                $rows["pic"]
            );
            array_push($nbas, $nba);
        }

        giaiPhongBoNho($link, $result);

        return $nbas;
    }
}
?>
