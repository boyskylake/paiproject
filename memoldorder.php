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
            }

              $sql = "SELECT * FROM `td_personnel` WHERE td_personnel.p_idcard = '$idcard'";
              $query = mysqli_query($conn, $sql);
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
                <th>ยืนยันการจอง</th>
              </tr>
            </thead>
            <tbody>
              <?php 
          if ($query->num_rows > 0) {
              while ($row = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><?php echo $row['p_id']; ?></td>
                <td><?php echo $row['p_idcard']; ?></td>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_home']; ?></td>
                <td><?php echo $row['p_tel']; ?></td>
                <td><a class="btn btn-success" href="memoldorder_accept.php?porid=<?php echo $row['p_id']; ?>">ยืนยัน</a></td>
              </tr>
            <?php }

            } else
             {
                  echo "0 results";
                  echo "<script type='text/javascript'>";
                  echo  "alert('0 results');";
                  echo "window.location='sheachmem.php';";
                  echo "</script>";
               }
                  $conn->close();
             ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php  include 'footer.php'; ?>
</body>

</html>