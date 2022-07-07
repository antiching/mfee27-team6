<?php
if(!isset($_GET["id"])){
    echo "沒有參數";
    exit;
}
$id=$_GET["id"];
require("../../db-connect2.php");


$sql="SELECT * FROM product WHERE id=$id";
$result=$conn->query($sql);
$productCount=$result->num_rows;



?>
<!doctype html>
<html lang="en">
  <head>
    <title>商品查詢</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <div class="py-2">
            <a class="btn btn-info" href="products.php">回到商品頁面</a>
        </div>
        <div class="py-2">
        <?php if($productCount>0):
                    $row=$result->fetch_assoc();?>
            <table class="table">
                <tr>
                    <th>id</th>
                    <td><?=$row["id"]?></td>
                </tr>
                <tr>
                    <th>商品名稱</th>
                    <td><?=$row["name"]?></td>
                </tr>
                <tr>
                    <th>商品簡介</th>
                    <td><?=$row["description"]?></td>
                </tr>
                <tr>
                    <th>商品類別</th>
                    <td><?=$row["category_id"]?></td>
                </tr>
                <tr>
                    <th>商品價格</th>
                    <td><?=$row["price"]?></td>
                </tr>
                <tr>
                    <th>商品庫存</th>
                    <td><?=$row["stock_in_inventory"]?></td>
                </tr>
                <tr>
                    <th>商品圖片</th>
                    <td><?=$row["image"]?></td>
                </tr>
                <tr>
                    <th>商品上下架時間</th>
                    <td><?=$row["launch_time"]?>~<?=$row["discontinue_time"]?></td>
                </tr>
                <tr>
                    <th>商品上下架狀態</th>
                    <td><?=$row["status"]?></td>
                </tr>
            </table>
            <div class="py-2">
                <a class="btn btn-warning" href="product-edit.php?id=<?=$row["id"]?>">修改商品內容</a>
                <a class="btn btn-danger" href="">刪除商品</a>
            </div>
        <?php endif;?>
        </div>
      </div>
  </body>
</html>