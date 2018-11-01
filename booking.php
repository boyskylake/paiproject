<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
</head>

<body class="h-25 w-100">
  <?php include 'header.php'; ?>
  
  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
        <?php include 'sidebarleft.php'; 
              include 'include/config.php';

               ini_set('display_errors', 1);
              error_reporting(~0);
              $strKeyword = null;
              if(isset($_POST["txtKeyword"]))
              {
                $strKeyword = $_POST["txtKeyword"];
                $sql = "SELECT * FROM `td_book` WHERE bo_name LIKE '%".$strKeyword."%'";
              }
              elseif(isset($_POST["cate"]))
              {
                $cate = $_POST["cate"];
                $sql = "SELECT * FROM `td_book` WHERE bo_cate LIKE '%".$cate."%'";
              }
              else{
              $sql = "SELECT * FROM `td_book` WHERE bo_name LIKE '%".$strKeyword."%' OR bo_cate LIKE '%".$strKeyword."%'";

              }
              $namsct = $_SERVER['SCRIPT_NAME'];

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
                    <div class="col-md-5 text-center">
                      <form name="frmSearch" method="post" action="<?php echo $namsct;?>">
                      <input class="form-control" type="" name="txtKeyword" id="txtKeyword">
                      <button class="btn btn-outline-primary" type="submit" value="Search">search</button>
                      </form>
                    </div>
                    <div class="col-md-7 text-center">
                      <!-- <div class="btn-group text-nowrap w-25 m-2 p-2"> -->
                        <!-- <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">ประเภทหนังสือ</button> -->
                        <!-- <div class="dropdown-menu"> -->
                      <form name="frmSearch" method="post" action="<?php echo $namsct;?>">

                        <select name="cate" class="btn btn-outline-primary">

                          <option value="">ประเภทหนังสือ</option>
                                  <option>จุลสาร</option>
                                  <option>นิตยสาร</option>
                                  <option>สารานุกรมไทย</option>
                                  <option>ประชาคมอาเซียน</option>
                                  <option>นวนิยาย</option>
                                  <option>หนังสือวิจัย</option>
                                  <option>หนังสือเยาวชน</option>
                                  <option>หนังสือใบลาน</option>
                                  <option>000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป</option>
                                  <option>100ปรัชญา</option>
                                  <option>200ศาสนา</option>
                                  <option>300สังคมศาสตร์</option>
                                  <option>400ภาษา</option>
                                  <option>500วิทยาศาสตร์</option>
                                  <option>600เทคโนโลยี</option>
                                  <option>700ศิลปะนันทนาการ</option>
                                  <option>800วรรณคดี</option>
                                  <option>900ประวัติศาสตร์และภูมิศาสตร์</option>
                                </select>
                                <!-- <br> -->
                          <button class="btn btn-outline-primary" type="submit" value="Search">search</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

                    <br>
                    <br>
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