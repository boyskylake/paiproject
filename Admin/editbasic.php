<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> </head>

<body>
  
 <?php include 'header.php';

        include 'include/config.php';

              $sql = "SELECT * FROM `td_basic` WHERE `b_id` = '1'";
              $query = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);


        if (isset($_POST['submit'])) {

                  $b_vi_logo = $_POST['b_vi_logo'];
                  $b_vi_col = $_POST['b_vi_col'];
                  $b_vi_vi = $_POST['b_vi_vi'];
                  $b_ple = $_POST['b_ple'];
                  $b_mg_name1 = $_POST['b_mg_name1'];
                  $b_mg_position1 = $_POST['b_mg_position1'];
                  $b_mg_name2 = $_POST['b_mg_name2'];
                  $b_mg_position2 = $_POST['b_mg_position2'];


                  $date1 = date("Ymd_His");
                   $numrand = (mt_rand());
                   $numrand1 = (mt_rand());
                   $numrand2 = (mt_rand());

                   $previ_img = isset($_FILES['previ_img']["name"])?$_FILES['previ_img']['name'] : '';
                   $premg1_img = isset($_FILES['premg1_img']["name"])?$_FILES['premg1_img']['name'] : '';
                   $premg2_img = isset($_FILES['premg2_img']["name"])?$_FILES['premg2_img']['name'] : '';

                  if($previ_img != '') { 
                  //โฟลเดอร์ที่เก็บไฟล์
                  $path="../img/";
                  //ตัวขื่อกับนามสกุลภาพออกจากกัน
                  $previ_img = strrchr($_FILES['previ_img']['name'],".");
                  $premg1_img = strrchr($_FILES['premg1_img']['name'],".");
                  $premg2_img = strrchr($_FILES['premg2_img']['name'],".");
                  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
                  $previ_img =$numrand.$date1.$previ_img;
                  $premg1_img =$numrand1.$date1.$premg1_img;
                  $premg2_img =$numrand2.$date1.$premg2_img;

                  $path_copy1=$path.$previ_img;
                  $path_copy2=$path.$premg1_img;
                  $path_copy3=$path.$premg2_img;

                  //คัดลอกไฟล์ไปยังโฟลเดอร์
                  @move_uploaded_file($_FILES['previ_img']['tmp_name'],$path_copy1);  
                  @move_uploaded_file($_FILES['premg1_img']['tmp_name'],$path_copy2);  
                  @move_uploaded_file($_FILES['premg2_img']['tmp_name'],$path_copy3);  


                  $sql = "UPDATE `td_basic` SET `b_vi_logo`='$b_vi_logo',`b_vi_col`='$b_vi_col',`b_vi_vi`='$b_vi_vi',`b_vi_img`='$previ_img',`b_ple`='$b_ple',`b_mg_name1`='$b_mg_name1',`b_mg_position1`='$b_mg_position1',`b_mg_img1`='$premg1_img',`b_mg_name2`='$b_mg_name2',`b_mg_position2`='$b_mg_position2',`b_mg_img2`='$premg2_img' WHERE `b_id`= '1'";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไขข้อมูลเรียบร้อย');";
                      echo "window.location='basic.php';";
                      echo "</script>";
                    }
                  }
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไข ไม่ได้');";
                      echo "window.location='basic.php';";
                      echo "</script>";
                  
                  
            }


  ?>
  <script type='text/javascript'>
      
        function preview_image1(event) 
        {
             var reader = new FileReader();
             reader.onload = function()
             {
                  var output = document.getElementById('previ_image');
                  output.src = reader.result;
             }
             reader.readAsDataURL(event.target.files[0]);
        }
        function preview_image2(event) 
        {
             var readermg1 = new FileReader();
             readermg1.onload = function()
             {
                  var outputmg1 = document.getElementById('premg1_image');
                  outputmg1.src = readermg1.result;
             }
             readermg1.readAsDataURL(event.target.files[0]);
        }
        function preview_image3(event) 
        {
             var readermg2 = new FileReader();
             readermg2.onload = function()
             {
                  var outputmg2 = document.getElementById('premg2_image');
                  outputmg2.src = readermg2.result;
             }
             readermg2.readAsDataURL(event.target.files[0]);
        }
  </script>
  <div class="text-primary text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <p class="active nav-link col-form-label-lg" href="#">ข้อมูลพื้นฐาน</p>
              </li>
              <div class="row">
                <div class="col-md-12">
                  <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST" enctype="multipart/form-data">
                  <div class="row w-100">
                    <div class="col-md-6">
                      <img id="previ_image" class="img-fluid d-block" src="../img/<?php echo $row['b_vi_img']; ?>"> </div>
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-12 p-4">
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-4">ตราสัญญลักษณ์</label>
                            <div class="col-sm-9 col-md-8">
                              <input class="form-control form-control-lg" placeholder="Your name, please" name="b_vi_logo" value="<?php echo $row['b_vi_logo']; ?>"> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-4">สีประจำเทศบาล</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" placeholder="Your name, please" name="b_vi_col" value="<?php echo $row['b_vi_col']; ?>"> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-4">วิสัยทัศน์</label>
                            <div class="col-sm-9 col-md-8">
                              <textarea class="form-control form-control-lg" rows="8" name="b_vi_vi"><?php echo $row['b_vi_vi']; ?></textarea> </div>
                          </div>
                          <div class="form-group form-row">
                            <label class="col-form-label col-sm-4">รูปภาพ</label>
                            <div class="col-sm-9 col-md-8">
                              <input class="form-control form-control-lg" type="file" name="previ_img" id="previ_img" accept="image/png, image/jpeg, image/gif " onchange="preview_image1(event)">
                               </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12">
                        <h1 class="text-center text-primary display-4">บุคลากรเทศบาล</h1>
                        <textarea class="form-control" id="Textarea" rows="8" placeholder="Type here"><?php echo $row['b_ple']; ?></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 m-0 text-center p-3">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <h1 class="">ผู้บริหาร</h1>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row w-75">
                        <div class="col-md-6">
                          <img id="premg1_image" class="img-fluid d-block" src="../img/<?php echo $row['b_mg_img1']; ?>"> </div>
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 p-4">
                              <div class="form-group form-row">
                                <label class="col-form-label col-sm-8">ชื่อ-สกุล</label>
                                <div class="col-sm-9 col-md-8">
                                  <input class="form-control form-control-lg" placeholder="Your name, please" name="b_mg_name1" value="<?php echo $row['b_mg_name1']; ?>"> </div>
                              </div>
                              <div class="form-group form-row">
                                <label class="col-form-label col-sm-8">ตำแหน่ง</label>
                                <div class="col-sm-8">
                                  <input class="form-control form-control-lg" placeholder="Your name, please" name="b_mg_position1" value="<?php echo $row['b_mg_position1']; ?>"> </div>
                              </div>
                              <div class="form-group form-row">
                            <label class="col-form-label col-sm-8">รูปภาพ</label>
                            <div class="col-sm-9 col-md-8">
                              <input class="form-control form-control-lg" type="file" name="premg1_img" id="premg1_img" accept="image/png, image/jpeg, image/gif " onchange="preview_image2(event)">
                               </div>
                          </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row w-75">
                        <div class="col-md-6">
                          <img id="premg2_image" class="img-fluid d-block" src="../img/<?php echo $row['b_mg_img2']; ?>"> </div>
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 p-4">
                              <div class="form-group form-row">
                                <label class="col-form-label col-sm-8">ชื่อ-สกุล</label>
                                <div class="col-sm-9 col-md-8">
                                  <input class="form-control form-control-lg" placeholder="Your name, please" name="b_mg_name2" value="<?php echo $row['b_mg_name2']; ?>"> </div>
                              </div>
                              <div class="form-group form-row">
                                <label class="col-form-label col-sm-8">ตำแหน่ง</label>
                                <div class="col-sm-8">
                                  <input class="form-control form-control-lg" placeholder="Your name, please" name="b_mg_position2" value="<?php echo $row['b_mg_position2']; ?>"> </div>
                              </div>
                              <div class="form-group form-row">
                            <label class="col-form-label col-sm-8">รูปภาพ</label>
                            <div class="col-sm-9 col-md-8">
                              <input class="form-control form-control-lg" type="file" name="premg2_img" id="premg2_img" accept="image/png, image/jpeg, image/gif " onchange="preview_image3(event)">
                               </div>
                          </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center m-2 p-2">
                          <input class="btn btn-primary btn-lg text-center" type="submit" name="submit" value="บันทึก">
                        </div>
                      </div>
                    </div>
                  </div>
                  <p> </p>
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