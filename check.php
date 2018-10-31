<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css"> </head>

<body class="h-25 w-100">
  <?php include 'header.php';

      //         session_start();
  
      // echo $_SESSION["bookid"];
      // echo $_SESSION["bookname"];
   ?>

 
  <div class="py-4" >
    <div class="container" >
      <div class="row">
                <div class="col-md-12"align="center">
                  <h2 class="m-5">ตรวจสอบข้อมูลสมาชิก</h2>
               <div class="row text-center"align="center">
                        <div class="text-center offset-md-2 col-md-4">
                          <a class="btn btn-primary btn-lg" href="editbooknow.php">สมาชิกใหม่</a>
                        </div>
                        <div class="text-center m-0 offset-md-3 col-md-4">
                          <a class="btn btn-primary btn-lg text-center" href="sheachmem.php">สมาชิกเดิม</a>
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