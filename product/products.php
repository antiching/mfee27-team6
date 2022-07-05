<?php
require("../../db-connect2.php");//串聯修改a

$sqlCategory="SELECT * FROM category";
$resultCategory=$conn->query($sqlCategory);
$rowsCategory=$resultCategory->fetch_all(MYSQLI_ASSOC);



$sql="SELECT product.*  FROM product  ";
// 想辦法把product.category_id=category.name
$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <table class="table table-bordered mt-5">
          <thead>
            <tr>
              <th>id</th>
              <th>商品名稱</th>
              <th>商品簡介</th>
              <th>商品類別</th>
              <th>商品價格</th>
              <th>商品庫存</th>
              <th>商品圖片</th>
              <th>商品上下架時間</th>
              <th>商品上下架狀態</th>
              <th>查看商品資訊</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rows as $row):?>
            <tr>
              <td><?=$row["id"]?></td>
              <td><?=$row["name"]?></td>
              <td><?=$row["description"]?></td>
              <td><?=$row["category_id"]?></td>
              <td><?=$row["price"]?></td>
              <td><?=$row["stock_in_inventory"]?></td>
              <td><?=$row["image"]?></td>
              <td><?=$row["launch_time"]."<br>";?>~<?=$row["discontinue_time"]?></td>
              <td><?=$row["status"]?></td>
              <td class="text-center"><a class="btn btn-info " href="product.php?id=<?=$row["id"]?>">查看</a></td>
              
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
  </body>
</html>