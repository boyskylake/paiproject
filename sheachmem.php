<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php'; ?>

 
  <div class="py-5" >
    <div class="container" >
      <div class="row">
        <div  class="col-md-12">
          <div class="card text-white p-2 bg-primary" align="center">
            <div class="card-body" align="center">
              <h1 class="text-center">ค้นหาข้อมูล</h1><br>
              <form action="memoldorder.php" method="POST" class="text-center">
                 <div class="row">
        <div class="offset-md-1 col-md-3">
          <label class="col-form-label col-form-label-lg">เลขบัตรประจำตัวประชาชน</label>
        </div>
        <div class="col-md-4 ">
          <input class="form-control form-control-lg" name="idcard" placeholder="Your name, please">
        </div>
        <div class="col-md-2 ">
          <input class="btn text-center btn-lg" style="background-color:#3333CC;" type="submit" name="submit" value="ค้นหา">
        </div>
      </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php  include 'footer.php'; ?>
</body>

</html>