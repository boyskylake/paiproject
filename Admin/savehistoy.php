<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css"> </head>

<body>
  <?php include 'header.php'; ?>
  
  <div class="text-left text-dark">
    <div class="container">
      <div class="row">
        
      <?php include 'sidebarleft.php';

            include 'include/config.php';

            $sql = "SELECT * FROM `td_history` WHERE `h_id` = '1'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);


            if (isset($_POST['submit'])) {

                  $detial = $_POST['detial'];
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

                  $sql = "UPDATE `td_history` SET `h_detail`='$detial',`h_img`= '$newname' WHERE `h_id`= '1'";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไขข้อมูลเรียบร้อย1');";
                      echo "window.location='addhistory.php';";
                      echo "</script>";
                    }
                  }

                  if ($pic == '') {
                    $sql = "UPDATE `td_history` SET `h_detail` = '$detial' WHERE `h_id`='1'";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo "<script type='text/javascript'>";
                      echo  "alert('แก้ไขข้อมูลเรียบร้อย2');";
                      echo "window.location='addhistory.php';";
                      echo "</script>";
                    }
                  }
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
        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-primary pt-3">ประวัติความเป็นมา</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <form action="savehistoy.php" method="POST" enctype="multipart/form-data">
                    <div class="col-md-10">
                      <img id="bo_img" name="bo_img" class="img-fluid d-block" src="../img/<?php echo $row['h_img']; ?>">
                      <input hidden type="text" name="picdel" value="<?php echo $row['h_img']; ?>">
                      <br>
                       <div class="form-group form-row">
                            <label class="col-form-label col-sm-3">รูป</label>
                            <div class="col-sm-8">
                              <input class="form-control form-control-lg" type="file" name="pic" id="pic" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)"> </div>
                          </div>
                      <div class="form-group">
                        <label for="Textarea">ประวัติความเป็นมา</label>
                        <textarea class="form-control" id="detial" name="detial" rows="10" cols="500" placeholder="Type here"><?php echo $row['h_detail']; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </ul>
          <div class="row">
            <div class="col-md-12 text-center">
              <input class="btn btn-primary btn-lg text-center m-2" type="submit" name="submit" value="บันทึก">
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
   <?php include 'footer.php'; ?>
</body>

</html>