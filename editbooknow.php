<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php';

      session_start();
        
        if (isset($_SESSION["bookid"])) {
          $bookid = $_SESSION["bookid"];
        }
        if (isset($_SESSION["bookname"])) {
          $bookname = $_SESSION["bookname"];
        }
      

      session_destroy();

      if (isset($_POST['submit'])) {

        if ($_POST['namebook'] != "") {
              
              include 'include/config.php';

              $bookid = $_POST['bookid'];
              $nameuser = $_POST['nameuser'];
              $idcard = $_POST['idcard'];
              $numhome = $_POST['numhome'];
              $home = $_POST['home'];
              $homename = $numhome." ".$home;
              $dis = $_POST['dis'];
              $state = $_POST['state'];
              $pro = $_POST['pro'];
              $zip = $_POST['zip'];
              $tel = $_POST['tel'];
              $dateloan = $_POST['dateloan'];
              $datenight = $_POST['datenight'];


              $sqlper = "INSERT INTO `td_personnel`(`p_id`, `p_name`, `p_home`, `p_district`, `p_state`, `p_province`, `p_zipcode`, `p_tel`, `p_idcard`) VALUES (NULL,'$nameuser','$homename','$dis','$state','$pro','$zip','$tel','$idcard')";
                mysqli_query($conn, $sqlper);
                $numid = mysqli_insert_id($conn);

                $sqlor = "INSERT INTO `td_order`(`o_id`, `o_id_p`, `o_id_b`, `o_date_loan`, `0_date_night`) VALUES (NULL,'$numid','$bookid','$dateloan','$datenight')";
                $query = mysqli_query($conn, $sqlor);
                if ($query) {
                  echo "<script type='text/javascript'>";
                  echo  "alert('เพิ่มข้อมูลเรียบร้อย');";
                  echo "window.location='booknowuser.php?porid=".$numid."';";
                  echo "</script>";
                }

              }else{
                echo "<script type='text/javascript'>";
                  echo  "alert('no fatal');";
                  echo "window.location='editbooknow.php';";
                  echo "</script>";
                }

            }      
   ?>
  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="col-md-12">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <p class="active nav-link col-form-label-lg " href="#">ข้อมูลทั่วไป</p>
              </li>
              <li class="nav-item">
                <a href="history.php" class="nav-link">ประวัติความเป็นมา</a>
              </li>
              <li class="nav-item">
                <a href="basicdata.php" class="nav-link">ข้อมูลพื้นฐาน &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> </a>
              </li>
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="Booking.php">บริการจอง – คืนหนังสือห้องสมุดชุมชน</a>
                </li>
              </ul>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="m-2">ข้อมูลผู้ยืม-คืนหนังสือ</h2>

                  <form action="editbooknow.php" method="POST">

                     <div class="form-group form-row">
                      <label class="col-form-label col-form-label-lg col-sm-4">เลขบัตรประจำตัวประชาชน</label>
                      <div class="col-sm-8 col-md-8">
                        <input class="form-control form-control-lg" type="text" name="idcard" placeholder="Your name, please" required> </div>
                    </div>
                    <div class="form-group form-row">
                      <label class="col-form-label col-form-label-lg col-sm-2">ชื่อ-สุกุล</label>
                      <div class="col-sm-9 col-md-10">
                        <input class="form-control form-control-lg" type="text" name="nameuser" placeholder="Your name, please" required> </div>
                    </div>
                    <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label col-form-label-lg">ที่อยู่</label>
                    <div class="col-sm-10">
                      <input class="form-control form-control-lg" type="text" name="numhome" placeholder="บ้านเลขที่/หมู่" required> </div>
                  </div>
                  <div class="form-group form-row">
                    <div class="col-sm-10 col-md-10 offset-md-2">
                      <div class="row">
                        <div class="col-md-6">
                          <input class="form-control form-control-lg" type="text" name="home" placeholder="บ้าน" required> </div>
                        <div class="col-md-6">
                          <input class="form-control form-control-lg" type="text" name="dis" placeholder="ตำบล" required> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-row">
                        <div class="col-sm-10 col-md-10 offset-md-2">
                          <div class="row">
                            <div class="col-md-6">
                              <input class="form-control form-control-lg" type="text" name="state" placeholder="อำเภอ" required> </div>
                            <div class="col-md-6">
                              <input class="form-control form-control-lg" type="text" name="pro" placeholder="จังวัด" required> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-row">
                            <div class="col-sm-10 col-md-5 offset-md-2">
                              <input class="form-control form-control-lg" type="text" name="zip" placeholder="รหัสไปรษณีย์" required> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">เบอร์โทร</label>
                            <div class="col-sm-10 col-md-5">
                              <input class="form-control form-control-lg" type="text" name="tel" placeholder="0x-xxx-xxxx" required> </div>
                          </div>
                    <div class="form-group form-row ">                     
                      <label class="col-form-label col-form-label-lg col-sm-2 ">วันที่ยืม</label>
                      <div class="col-sm-10 col-md-5">
                        <input class="form-control form-control-lg" type="date" name="dateloan" placeholder="Your name, please" required> </div>
                    </div>
                     <div class="form-group form-row ">
                      <label class="col-form-label col-form-label-lg col-sm-2 ">วันที่คืน</label>
                      <div class="col-sm-10 col-md-5">
                        <input class="form-control form-control-lg" type="date" name="datenight" placeholder="Your name, please" required> </div>
                    </div>
                    <div class="col-md-12 p-0">
                     <!--  <div class="form-group form-row">
                        <label class="col-form-label col-form-label-lg col-sm-3">ประเภทหนังสือ</label>
                        <div class="col-sm-9 col-md-8">
                          <div class="btn-group btn-group-lg">
                            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> ประเภทหนังสือ </button>
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
                      </div> -->
                      <div class="form-group form-row">
                        <label class="col-form-label col-form-label-lg col-sm-3">ชื่อหนังสือที่จอง</label>
                        <div class="col-sm-5">
                          <input readonly type="text" name="namebook" class="form-control form-control-lg" name="namebook" value="<?php if(isset($bookname)){ echo $bookname; }  ?>"> </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 py-0 mx-auto">
                          <div class="form-group form-row text-center">
                            <label class="col-form-label col-form-label-lg col-sm-2">สถานะ</label>
                            <div class="col-sm-10 col-md-2">
                              <input readonly class="form-control form-control-lg" value="จอง">
                              <input hidden class="form-control form-control-lg" name="bookid" value="<?php echo $bookid; ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center">
                        <div class="text-center offset-md-2 col-md-4">
                          <input class="btn btn-primary btn-lg" type="submit" name="submit" value="บันทัก">
                        </div>
                        <div class="text-center m-0 offset-md-3 col-md-5">
                          <a class="btn btn-primary btn-lg text-center" href="#">ยกเลิก</a>
                        </div>
                      </div>
                    </div>
                  </div>

                 </form>
                </div>
              </div>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  
</body>

</html>