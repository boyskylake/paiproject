<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> </head>

<body>
   <?php include 'header.php'; 
          include 'include/config.php';

          if (!isset($_POST['edit'])) {
         
            if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $cate = $_POST['cate'];
              $author = $_POST['author'];
              $year = $_POST['year'];
              $amount = $_POST['amount'];
              $detial = $_POST['detial'];

                $date1 = date("Ymd_His");
               $numrand = (mt_rand());
               $pic = (isset($_POST['pic']) ? $_POST['pic'] : '');
      
              $upload=$_FILES['pic'];
              if($upload <> '') { 
              //โฟลเดอร์ที่เก็บไฟล์
              $path="../img/";
              //ตัวขื่อกับนามสกุลภาพออกจากกัน
              $type = strrchr($_FILES['pic']['name'],".");
              //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
              $newname =$numrand.$date1.$type;
              $path_copy=$path.$newname;
              $path_link="../img/".$newname;
              //คัดลอกไฟล์ไปยังโฟลเดอร์
              @move_uploaded_file($_FILES['pic']['tmp_name'],$path_copy);  
              }

                $sql = "INSERT INTO `td_book`(`bo_id`, `bo_name`, `bo_cate`, `bo_author`, `bo_year`, `bo_amount`, `bo_detail`, `bo_img`) VALUES (NULL,'$name','$cate','$author','$year','$amount','$detial','$newname')";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                  echo "<script type='text/javascript'>";
                  echo  "alert('เพิ่มข้อมูลเรียบร้อย');";
                  echo "window.location='savebook.php';";
                  echo "</script>";
                }

            }

          }
          if (isset($_POST['edit'])) {
                  $name = $_POST['name'];
                  $cate = $_POST['cate'];
                  $author = $_POST['author'];
                  $year = $_POST['year'];
                  $amount = $_POST['amount'];
                  $detial = $_POST['detial'];
                  $id = $_POST['id'];
                  $txt_file_delete = $_POST['picdel'];

                    $date1 = date("Ymd_His");
                   $numrand = (mt_rand());
                   $pic = isset($_FILES['pic']["name"])?$_FILES['pic']['name'] : '';
                   
                  if($pic != '') { 
                  //โฟลเดอร์ที่เก็บไฟล์
                  $path="../img/";
                  //ตัวขื่อกับนามสกุลภาพออกจากกัน
                  $type = strrchr($_FILES['pic']['name'],".");
                  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
                  $newname =$numrand.$date1.$type;
                  $path_copy=$path.$newname;
                  $path_link="../img/".$newname;
                  //คัดลอกไฟล์ไปยังโฟลเดอร์
                  @move_uploaded_file($_FILES['pic']['tmp_name'],$path_copy);  

                          if($txt_file_delete != '') {
                          unlink($path.$txt_file_delete);
                        }

                  $sql = "UPDATE `td_book` SET `bo_name`='$name',`bo_cate`='$cate',`bo_author`='$author',`bo_year`='$year',`bo_amount`='$amount',`bo_detail`='$detial',`bo_img`='$newname' WHERE `bo_id`='$id'";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไขข้อมูลเรียบร้อย1');";
                      echo "window.location='savebook.php';";
                      echo "</script>";
                    }
                  }

                  if ($pic == '') {
                    $sql = "UPDATE `td_book` SET `bo_name`='$name',`bo_cate`='$cate',`bo_author`='$author',`bo_year`='$year',`bo_amount`='$amount',`bo_detail`='$detial' WHERE `bo_id`='$id'";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไขข้อมูลเรียบร้อย2');";
                      echo "window.location='savebook.php';";
                      echo "</script>";
                    }
                  }
                    

                }

          if(isset($_GET['edit'])) {
              $id = $_GET['edit'];

              $sql = "SELECT * FROM `td_book` WHERE `bo_id` = '$id'";
              $query = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);
          }
   ?>
   <script type='text/javascript'>
        function preview_image(event) 
        {
             var reader = new FileReader();
             reader.onload = function()
             {
                  var output = document.getElementById('bo_img');
                  output.src = reader.result;
             }
             reader.readAsDataURL(event.target.files[0]);
        }
        </script>
  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="active nav-link col-form-label-lg" href="#">ข้อมูลหนังสือ</a>
              </li>
              <div class="row">
                <div class="col-md-12">
                  <div class="row w-100">
                    <div class="col-md-6">
                      <img id="bo_img" class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
                    <div class="col-md-5">
                      <div class="row">
                        <form action="addbook.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 p-1">
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-4">ประเภทหนังสือ</label>
                            <div class="col-md-8">
                              <div class="btn-group">
                                <select name="cate" class="btn btn-outline-primary" required>

                                  <?php 
                                  if(isset($_GET['edit'])){
                                    ?>
                                  <option value="">ประเภทหนังสือ</option>
                                  <option <?php if ($row['bo_cate'] == 'จุลสาร') {
                                        echo "selected";
                                      } ?>>จุลสาร</option>
                                  <option <?php if ($row['bo_cate'] == 'นิตยสาร') {
                                        echo "selected";
                                      } ?>>นิตยสาร</option>
                                  <option <?php if ($row['bo_cate'] == 'สารานุกรมไทย') {
                                        echo "selected";
                                      } ?>>สารานุกรมไทย</option>
                                  <option <?php if ($row['bo_cate'] == 'ประชาคมอาเซียน') {
                                        echo "selected";
                                      } ?>>ประชาคมอาเซียน</option>
                                  <option <?php if ($row['bo_cate'] == 'นวนิยาย') {
                                        echo "selected";
                                      } ?>>นวนิยาย</option>
                                  <option <?php if ($row['bo_cate'] == 'หนังสือวิจัย') {
                                        echo "selected";
                                      } ?>>หนังสือวิจัย</option>
                                  <option <?php if ($row['bo_cate'] == 'หนังสือเยาวชน') {
                                        echo "selected";
                                      } ?>>หนังสือเยาวชน</option>
                                  <option <?php if ($row['bo_cate'] == 'หนังสือใบลาน') {
                                        echo "selected";
                                      } ?>>หนังสือใบลาน</option>
                                  <option <?php if ($row['bo_cate'] == '000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป') {
                                        echo "selected";
                                      } ?>>000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป</option>
                                  <option <?php if ($row['bo_cate'] == '100ปรัชญา') {
                                        echo "selected";
                                      } ?>>100ปรัชญา</option>
                                  <option <?php if ($row['bo_cate'] == '200ศาสนา') {
                                        echo "selected";
                                      } ?>>200ศาสนา</option>
                                  <option <?php if ($row['bo_cate'] == '300สังคมศาสตร์') {
                                        echo "selected";
                                      } ?>>300สังคมศาสตร์</option>
                                  <option <?php if ($row['bo_cate'] == '400ภาษา') {
                                        echo "selected";
                                      } ?>>400ภาษา</option>
                                  <option <?php if ($row['bo_cate'] == '500วิทยาศาสตร์') {
                                        echo "selected";
                                      } ?>>500วิทยาศาสตร์</option>
                                  <option <?php if ($row['bo_cate'] == '600เทคโนโลยี') {
                                        echo "selected";
                                      } ?>>600เทคโนโลยี</option>
                                  <option <?php if ($row['bo_cate'] == '700ศิลปะนันทนาการ') {
                                        echo "selected";
                                      } ?>>700ศิลปะนันทนาการ</option>
                                  <option <?php if ($row['bo_cate'] == '800วรรณคดี') {
                                        echo "selected";
                                      } ?>>800วรรณคดี</option>
                                  <option <?php if ($row['bo_cate'] == '900ประวัติศาสตร์และภูมิศาสตร์') {
                                        echo "selected";
                                      } ?>>900ประวัติศาสตร์และภูมิศาสตร์</option>
                                  
                                  <?php 
                                    }
                                    if(!isset($_GET['edit'])){
                                   ?>
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
                                  <?php 
                                    }
                                   ?>
                                </select>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">ชื่อหนังสือ</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" type="text" name="name" value="<?php if(isset($_GET['edit'])){ echo $row['bo_name']; } ?>" required> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">ชื่อผู้แต่ง</label>
                            <div class="col-sm-9 col-md-8">
                              <input class="form-control form-control-lg" type="text" name="author" value="<?php if(isset($_GET['edit'])){ echo $row['bo_author']; } ?>" required> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">ปีที่พิมพ์</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" type="text" name="year" value="<?php if(isset($_GET['edit'])){ echo $row['bo_year']; } ?>" required> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">จำนวน</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" type="number" name="amount" value="<?php if(isset($_GET['edit'])){ echo $row['bo_amount']; } ?>" required> </div>
                          </div>
                         <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">รูป</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" type="file" name="pic" id="pic" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12">
                        <h1 class="text-center display-5 text-primary">เนื้อหารายละเอียด</h1>
                        <textarea class="form-control" name="detial" id="detial" rows="5" ><?php if(isset($_GET['edit'])){ echo $row['bo_detail']; } ?></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 m-0 text-center p-3">
                              <div class="row">
                                <div class="col-md-12">

                                  <?php if(isset($_GET['edit'])){ 
                                    echo '<input hidden type="text" name="edit" value="edit">';
                                    echo '<input hidden type="text" name="id" value="'.$id.'">';
                                    echo '<input hidden type="text" name="picdel" value="'.$row['bo_img'].'">';
                                   } ?>
                                  <input class="btn btn-primary btn-lg" name="submit" type="submit" value="บันทึก"/>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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