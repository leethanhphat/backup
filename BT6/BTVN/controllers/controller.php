<?php
require_once("models/model.php");
class Controller{ 
    public $model;
    public function __construct()
    {
    $this->model = new Model();
    }
    public function invoke()
    {
        if(!isset($_GET["nbaid"])){
            $nbas = $this->model->getnbalist();
            include "views/nbalist.php";
        }
        else
        {
            $nba = $this->model->getnba($_GET["nbaid"]); 
            include "views/viewnba.php";
        }
        
    }
    
    
}
?>
<!-- <script>
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
   </script> -->