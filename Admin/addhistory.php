<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> 

</head>
<body>
 <?php include 'header.php'; ?>
  <div class="text-left text-dark">
    <div class="container">
      <div class="row">
        <!-- เมนูทางซ้าย -->
        <?php include 'sidebarleft.php';
            include 'include/config.php';

            $sql = "SELECT * FROM `td_history` WHERE `h_id` = '1'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
         ?>

        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="text-primary pt-3">ประวัติความเป็นมา</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-10">
                      <img class="img-fluid d-block" src="../img/<?php echo $row['h_img']; ?>"> 
                    </div>
                  </div>
                  <p class="lead text-left text-muted"><?php echo $row['h_detail']; ?></p>
                </div>
              </div>
            </ul>
          </ul>
          <div class="row">
            <div class="col-md-12 text-center">
              <a class="btn btn-primary btn-lg text-center m-2" href="savehistoy.php">แก้ไขข้อมูล</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>