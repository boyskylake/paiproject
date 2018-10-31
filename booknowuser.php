<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php';

        include 'include/config.php';
        if (isset($_POST['idcard'])) {
          $idcard = $_POST['idcard'];
           $sql = "SELECT * FROM `td_order`
                      LEFT JOIN td_book
                      ON td_order.o_id_b = td_book.bo_id
                      LEFT JOIN td_personnel
                      ON td_order.o_id_p = td_personnel.p_id
                      WHERE td_personnel.p_idcard = '$idcard'";
              $query = mysqli_query($conn, $sql);
        }
        if (isset($_GET['porid'])) {
            $id = $_GET['porid'];

              $sql = "SELECT * FROM `td_order`
                      LEFT JOIN td_book
                      ON td_order.o_id_b = td_book.bo_id
                      LEFT JOIN td_personnel
                      ON td_order.o_id_p = td_personnel.p_id
                      WHERE td_personnel.p_id = '$id'";
              $query = mysqli_query($conn, $sql);
        }
            

   ?>

  <div class="py-5">
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
                <th>ประเภทหนังสือ</th>
                <th>ชื่อหนังสือ</th>
                <th>สถานะ</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><?php echo $row['o_id']; ?></td>
                <td><?php echo $row['p_idcard']; ?></td>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_home']; ?></td>
                <td><?php echo $row['p_tel']; ?></td>
                <td><?php echo $row['o_date_loan']; ?></td>
                <td><?php echo $row['bo_cate']; ?></td>
                <td><?php echo $row['bo_name']; ?></td>
                <td><?php echo $row['o_status']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php  include 'footer.php'; ?>
</body>

</html>