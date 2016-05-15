<?php
    session_start();
    if ($_SESSION["username"] == null) {
      header("Location: http://localhost:88/CBService/page404.php");
      exit();
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>สหกรณ์หมีน้อย</title>
    <link rel="stylesheet" href="./stylesheet/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1 class="text-center">รายการสินค้าของสหกรณ์หมีน้อย</h1>
    <br>
    <div class="menu-bar">
      <?php include './menuList.php'; ?>
  		ค้นหาสินค้า : <input type="text" placeholder="ป้อนชื่อสินค้า" id="search" />
      <button onclick="searchProduct()">ค้นหา</button>
      <button onclick="getProducts()">แสดงสินค้าทั้งหมด</button>
    </div>
    <div id="prodTable">
      <hr>
      <table class="product-table" border='1'>
        <thead>
          <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>จำนวนคงเหลือ</th>
            <th>ราคา</th>
            <th>สั่งซื้อ</th>
          </tr>
        </thead>
        <tbody id="prodRow">
        </tbody>
      </table>
    </div>
    <script src="./jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="./js/script.js" charset="utf-8"></script>
  </body>
</html>
