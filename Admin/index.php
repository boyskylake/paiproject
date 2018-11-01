<?php 
session_start();
  if(isset($_SESSION['UserID']))
  {
    header("location:addhistory.php");
  }

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../style.css"> </head>

<body style="background-image: url('../img/t.jpg');background-size:cover;">
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5 bg-primary">
            <div class="card-body">
              <h1 class="mb-4 text-center">เข้าสู่ระบบ</h1>
              <form action="include/process_login.php" method="POST" class="text-center">
                <div class="form-group text-left">
                  <label class="text-left">ลงชื่อผู้ใช้งาน</label>
                  <input type="text" class="form-control" name="user" placeholder="ชื่อผู้ใช้งาน"> </div>
                <div class="form-group text-left">
                  <label>รหัสผ่าน</label>
                  <input type="password" class="form-control" name="pass" placeholder="รหัสผ่าน"> </div>
                <button type="submit" class="btn btn-secondary text-center btn-lg m-2 p-2 w-50">ตกลง</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>