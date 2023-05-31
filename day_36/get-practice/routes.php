<?php
print_r($_GET["name"]);
    if(isset($_GET)){
        if("sagar" == isset($_GET["name"])){
            header("location: get-practice.php");
        }else{
            header("location: not-coding.php");
        }
    }
    else{
        echo "tata";
    }
?>