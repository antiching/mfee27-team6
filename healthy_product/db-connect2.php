<?php
$servername="localhost";
$username= "admin";
$password="220205";
$dbname="healthy_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("fail connected:".$conn->connect_error);
}else{
    //echo "success connected .<br>";
}


?>