<?
require("../../db-connect2.php");

$sql="UPDATE product SET status=0 WHERE id='$id'";

if($conn->query($sql)===TRUE){
    echo "下架成功";
}else{
    echo "下架產品失敗".$conn->error;
}


?>