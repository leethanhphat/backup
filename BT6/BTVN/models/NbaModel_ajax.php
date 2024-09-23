<?php
require_once("modules/db_module.php");
require_once("models/nba.php");

class NbaModel_ajax {
    public function getNbaInfo($id) {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_nba where id=".$id);
        $data = [];

        while ($rows = mysqli_fetch_assoc($result)) {
            $data[] = $rows;
        }

        giaiPhongBoNho($link, $result);

        return $data;
    }
}
?>
