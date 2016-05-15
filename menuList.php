<?php session_start(); ?>
<div class="menu-list">
  <ul>
    <?php if ($_SESSION["username"] == null): ?>
      <li><a href="register.php">สมัครสมาชิก</a></li>
    <?php endif; ?>
    <li><a href="productList.php">รายการสินค้า</a></li>
    <li><a href="#">สั่งซื้อสินค้า</a></li>
    <li><a href="#">ตรวจสอบการสั่งซื้อ</a></li>
  </ul>
</div>
