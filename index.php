<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>สหกรณ์หมีน้อย</title>
    <?php include 'stylesheet.php'; ?>
  </head>
  <body>
    <h1 class="text-center">สหกรณ์หมีน้อย</h1>
    <h2 class="text-center">หน้าหลัก</h2>
    <div class="menu-bar">
      <?php include './menuList.php'; ?>
    </div>
    <hr><br><br>
    <div class="col-md-4 col-md-offset-4">
      <form class="login-form">
        <div class="form-group">
          <label for="username">ชื่อผู้ใช้งาน</label>
          <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group">
          <label for="password">รหัสผ่าน</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <input type="submit" class="btn btn-default" name="submit" value="เข้าสู่ระบบ" />
        <input type="reset" class="btn btn-default" name="reset" value="ล้างข้อมูล" />
      </form>
    </div>
    <script src="./jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="../CBService/js/script.js" charset="utf-8"></script>
  </body>
</html>
