<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php'; ?>
  
  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
        <?php include 'sidebarleft.php'; 
              include 'include/config.php';

              $sql = "SELECT * FROM `td_book`";
              $query = mysqli_query($conn, $sql);
              

        ?>
        <div class="col-md-9">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <p class="active nav-link col-form-label-lg" href="#">รายการหนังสือ</p>
              </li>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-11 text-right">
                      <div class="btn-group text-nowrap w-25 m-2 p-2">
                        <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">ประเภทหนังสือ</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป
                            <br> </a>
                          <a class="dropdown-item" href="#">100ปรัชญา
                            <br> </a>
                          <a class="dropdown-item" href="#">200ศาสนา
                            <br> </a>
                          <a class="dropdown-item" href="#">300สังคมศาสตร์
                            <br> </a>
                          <a class="dropdown-item" href="#">400ภาษา
                            <br> </a>
                          <a class="dropdown-item" href="#">500วิทยาศาสตร์
                            <br> </a>
                          <a class="dropdown-item" href="#">600เทคโนโลยี
                            <br> </a>
                          <a class="dropdown-item" href="#">700ศิลปะนันทนาการ
                            <br> </a>
                            <a class="dropdown-item" href="#">800วรรณคดี
                            <br> </a>
                            <a class="dropdown-item" href="#">900ประวัติศาสตร์และภูมิศาสตร์
                            <br> </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <?php while ($row = mysqli_fetch_array($query)) {
                 ?>
                <div class="col-md-4">
                  <img class="img-fluid d-block" src="img/<?php echo $row['bo_img']; ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="">
                        <li><?php echo 'ชื่อหนังสือ '.$row['bo_name']; ?></li>
                        <li><?php echo 'ชื่อผู้แต่ง '.$row['bo_author']; ?></li>
                        <li><a href="news.php?id=<?php echo $row['bo_id']; ?>">รายละเอียด</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <?php  } ?>
        </div>
               
      </div>
    </div>
  </div>
  </div>
  <?php include 'footer.php'; ?>
  
</body>

</html>