<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>สมัครสมาชิก</title>
    <?php include 'stylesheet.php'; ?>
  </head>
  <body>
    <h1 class="text-center">สหกรณ์หมีน้อย</h1>
    <h2 class="text-center">สมัครสมาชิก</h2>
    <hr><br>
    <div class="col-md-4 col-md-offset-4">
      <form class="register-form">
        <div class="form-group">
          <label for="username">ชื่อผู้ใช้งาน</label>
          <input type="text" class="form-control" name="username" required="true" />
        </div>
        <div class="form-group">
          <label for="password">รหัสผ่าน</label>
          <input type="password" class="form-control" name="password" required="true" />
        </div>
        <div class="form-group">
          <label for="fullname">ชื่อ-นามสกุล</label>
          <input type="text" class="form-control" name="fullname" required="true" />
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" required="true" />
        </div>
        <div class="form-group">
          <label for="tel">เบอร์โทรศัพท์</label>
          <input type="text" class="form-control" name="tel" required="true" />
        </div>
        <input type="submit" class="btn btn-default" name="submit" value="ลงทะเบียน" />
        <input type="reset" class="btn btn-default" name="reset" value="ล้างข้อมูล" />
      </form>
    </div>
    <script src="./jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="../CBService/js/script.js" charset="utf-8"></script>
  </body>
</html>
