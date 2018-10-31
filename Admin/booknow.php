<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> </head>

<body>
 <?php include 'header.php'; ?>
  <div class="p-4">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-3">
          <label class="col-form-label col-form-label-lg col-sm-12 m-0">เลขบัตรประจำตัวประชาชน</label>
        </div>
        <div class="col-md-3 ">
          <input class="form-control form-control-lg" placeholder="Your name, please">
        </div>
        <div class="col-md-2 ">
          <a class="btn btn-primary text-center btn-lg" href="#">ค้นหา</a>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>เลขบัตรประชาชน</th>
                <th>ชื่อ-สกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>วันที่ยืม</th>
                <th>วันที่คืน</th>
                <th class="">ประเภทหนังสือ</th>
                <th>ชื่อหนังสือ</th>
                <th>สถานะ</th>
                <th>จัดการข้อมูล</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td >จอง </td>
                <td>แก้ไข ลบ </td>
              </tr>
              <tr></tr>
              <tr></tr>
            </tbody>
          </table>
          <div class="row m-2">
            <div class="offset-md-5 col-md-3">
              <a class="btn btn-primary text-center btn-lg" href="editbooknow.php">เพิ่มข้อมูล</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>