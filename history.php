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

            $sql = "SELECT * FROM `td_history` WHERE `h_id` = '1'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);

         ?>
        
        <div class="col-md-8">
          <ul class="nav nav-pills flex-column">
            <ul class="nav nav-pills flex-column">
              <div class="row">
                <div class="col-md-11">
                  <h2 class="text-primary pt-2">ประวัติความเป็นมา</h2>

                  <img class="img-fluid d-block mb-3 w-75 img-thumbnail "src="img/<?php echo $row['h_img']; ?>"> 
                  <p class="lead text-left text-muted"><?php echo $row['h_detail']; ?></p>
                  </div>
              </div>
            </ul>
          </ul>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>