<?php

require("../db-connect2.php");

$name=$_GET["name"];

if(empty($_GET["name"])){
    echo "name 為空";
}



?>