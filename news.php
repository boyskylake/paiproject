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

            $id = $_GET['id'];

              $sql = "SELECT * FROM `td_book` WHERE bo_id = '$id'";
              $query = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);


              session_start();

        $id = $_GET['id'];

        $_SESSION["bookid"] = $row['bo_id'];
        $_SESSION["bookname"] = $row['bo_name'];
      session_write_close();
      ?>

        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <p class="active nav-link col-form-label-lg" href="#">ข้อมูลหนังสือ</p>
              </li>
              <div class="row">
                <div class="col-md-12">
                  <div class="row w-100">
                    <div class="col-md-5">
                      <img class="img-fluid d-block" src="img/<?php echo $row['bo_img']; ?>"> </div>
                    <div class="col-md-7">
                      <div class="form-group form-row">
                        <label class="col-form-label col-sm-4 col-form-label-lg">ประเภทหนังสือ</label>
                        <div class="col-sm-5 col-md-8">
                          <input readonly class="form-control form-control-lg" value="<?php echo $row['bo_cate']; ?>"> </div>
                      </div>
                      <div class="form-group form-row">
                        <label class="col-form-label col-sm-4 col-form-label-lg">ชื่อหนังสือ</label>
                        <div class="col-sm-5 col-md-8">
                          <input readonly class="form-control form-control-lg" value="<?php echo $row['bo_name']; ?>"> </div>
                      </div>
                      <div class="form-group form-row">
                        <label class="col-form-label col-sm-4 col-form-label-lg">ชื่อผู้แต้ง</label>
                        <div class="col-sm-5 col-md-8">
                          <input readonly class="form-control form-control-lg" value="<?php echo $row['bo_author']; ?>"> </div>
                      </div>
                      <div class="form-group form-row">
                        <label class="col-form-label col-sm-4 col-form-label-lg">ปีที่พิมพ์</label>
                        <div class="col-sm-5 col-md-8">
                          <input readonly class="form-control form-control-lg" value="<?php echo $row['bo_year']; ?>"> </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="offset-md-1 col-md-4">
                              <label class="col-form-label col-sm-12 col-form-label-lg">มีจำนวน</label>
                            </div>
                            <div class=" col-md-4">
                              <input class="form-control form-control-lg" readonly value="<?php echo $row['bo_amount']; ?>">
                            </div>
                            <div class="col-md-3">
                              <label class="col-form-label col-sm-12 col-form-label-lg">เล่ม</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group form-row">
                        <div class="col-sm-5 col-md-8"> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-12">
                        <h1 class="text display-5 text-primary">เนื้อหารายละเอียด</h1>
                        <textarea readonly class="form-control" id="Textarea" rows="5" placeholder="Type here"><?php echo $row['bo_detail']; ?></textarea>
                      </div>
                    </div>
                  <div class="row my-2">
            <div class="text-center offset-md-2 col-md-4">
              <?php 
                if ($row['bo_amount'] == '0') { ?>
                   
                    <button class="btn btn-danger btn-lg" >ไม่มีหนังสือให้ยืม</button>
            <?php  
                }else{ 
            ?>
            
              <a class="btn btn-primary btn-lg" href="check.php?id=<?php echo $id; ?>">ทำการจอง</a>
                  
            <?php  
                }

               ?>
            </div>
            <div class="text-center m-0 offset-md-3 col-md-4">
              <a class="btn btn-primary btn-lg text-center" href="booking.php">ยกเลิก</a>
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