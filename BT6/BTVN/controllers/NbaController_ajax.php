<?php
require_once("models/NbaModel_ajax.php");

class NbaController_ajax {
    public function showNba($id) {
        $model = new NbaModel_ajax();
        $nbaInfo = $model->getNbaInfo($id);

        include("views/ajax.php");
    }
}
?>
