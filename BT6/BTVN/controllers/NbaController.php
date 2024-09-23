<?php
require_once 'models/NbaModel.php';

class NbaController {
    public function search() {
        $model = new NbaModel();

        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $nbas = $model->searchNbas($keyword);
        } else {
            $nbas = [];
        }

        include 'views/search.php';
    }
}

?>

