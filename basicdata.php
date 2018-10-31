<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php'; ?>

  <div class="text-left text-dark">
    <div class="container">
      <div class="row">
        <?php include 'sidebarleft.php';
              include 'include/config.php';

              $sql = "SELECT * FROM `td_basic` WHERE `b_id` = '1'";
              $query = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);
         ?>

        <div class="col-md-6">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-primary pt-3">ข้อมูลพื้นฐาน</h2>
                  <div class="row">
                    <div class="text-center offset-md-3 col-md-10">
                      <img class="img-fluid d-block m-2" src="img/<?php echo $row['b_vi_img']; ?>"> </div>
                  </div>
                  <div class="blockquote text-center">
                    <p class="mb-0">ตราสัญญาลักษณ์</p>
                    <div class="blockquote-footer text-left"><?php echo $row['b_vi_logo']; ?></div>
                  </div>
                  <div class="blockquote">
                    <p class="mb-0">สีประจำเทศบาล</p>
                    <div class="blockquote-footer"><?php echo $row['b_vi_col']; ?></div>
                  </div>
                  <div class="blockquote">
                    <p class="mb-0">วิสัยทัศน์การพัฒนาเทศบาลตำบลอากาศอำนวย</p>
                    <div class="blockquote-footer"><?php echo $row['b_vi_vi']; ?></div>
                  </div>
                  <div class="blockquote">
                    <p class="mb-0">บุคลากรเทศบาล</p>
                    <div class="blockquote-footer"><?php echo $row['b_ple']; ?></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> </div>
              </div>
            </ul>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <p href="#" class="active nav-link">ผู้บริหารเทศบาล</p>
              </li>
              <img class="img-fluid d-block" src="img/<?php echo $row['b_mg_img1']; ?>">
              <li class="nav-item">
                <p href="#" class="nav-link text-center"><?php echo $row['b_mg_name1']; ?>
                  <br><?php echo $row['b_mg_position1']; ?></p>
              </li>
              <img class="img-fluid d-block" src="img/<?php echo $row['b_mg_img2']; ?>">
              <li class="nav-item">
                <p href="#" class="nav-link text-center"><?php echo $row['b_mg_name2']; ?>
                  <br><?php echo $row['b_mg_position2']; ?></p>
              </li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>