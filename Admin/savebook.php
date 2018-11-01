<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> 
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

</head>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    });
  </script>
<body>
   <?php include 'header.php';
          include 'include/config.php';
          if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $sql = "DELETE FROM `td_book` WHERE bo_id = '$id'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                  echo "<script type='text/javascript'>";
                  echo "alert('ลบข้อมูลเรียบร้อย');";
                  echo "window.location='savebook.php';";
                  echo "</script>";
            }
          }

           $sql = "SELECT * FROM `td_book`";
              $query = mysqli_query($conn, $sql);
    ?>
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table id="example" class="display table">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>รูปภาพ</th>
                <th>ประเภทหนังสือ</th>
                <th>ชื่อหนังสือ</th>
                <th>ชื่อผู้แต่ง</th>
                <th>ปีที่พิมพ์</th>
                <th>รายละเอียดหนังสือ</th>
                <th>จำนวน</th>
                <th>จัดการข้อมูล</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i = 1;
                while ($row = mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><img src="../img/<?php echo $row['bo_img']; ?>" width="100px"></td>
                <td><?php echo $row['bo_cate']; ?></td>
                <td><?php echo $row['bo_name']; ?></td>
                <td><?php echo $row['bo_author']; ?></td>
                <td><?php echo $row['bo_year']; ?></td>
                <td><?php echo $row['bo_detail']; ?></td>
                <td><?php echo $row['bo_amount']; ?></td>
                <td><a class="btn btn-primary" href="addbook.php?edit=<?php echo $row['bo_id']; ?>">แก้ไข</a>  <a class="btn btn-danger" href="<?php echo $_SERVER['SCRIPT_NAME']."?del=".$row['bo_id']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')">ลบ</a>
              <?php $i++; }  ?>
            </tbody>
          </table>
         
          <div class="row my-2">
            <div class="text-center col-md-2 offset-md-5">
              <a class="btn btn-primary text-center btn-lg" href="addbook.php">เพิ่มข้อมูล</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
 

   <?php include 'footer.php'; ?>
</body>

</html>