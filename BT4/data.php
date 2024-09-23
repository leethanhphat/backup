<?php
include "data.php"; if(isset($_GET['page'])) { 
    if($_GET['page']=="home"){
        //chay to file index.php
        foreach ($data as $key=> $value) {
            echo " <a href='?who".$key."&page=detail'> 
                <div class='box'> 
                <img src='img/" .$value[1]."'>
                <h3>".$value[0]."</h3>
            </div>
            </a>";
}
    }else if($_GET['page']=="detail"){ //chay su file detail.php
    if (isset($_GET['who']) && array_key_exists($_GET['who'], $data)) {

    }
        $human= $data[$_GET['who']];
    echo "
        <h2>". $human[0]."</h2>
        <img src='img/". $human [1]."'> 
        <p>" .$human [2]."</p>
        ";
    }else
        header ("Location: ./");
}else
    header ("Location: ./?page=home");
?>