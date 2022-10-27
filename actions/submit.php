<?php

include "../controllers/general_controller.php";



    $name = $_POST['name'];
    $tele = $_POST['phone'];


insert_ctr($name,$tele);
   

//header("Location: ../view/done.php");


//header("Location: ../view/done.php");




?>