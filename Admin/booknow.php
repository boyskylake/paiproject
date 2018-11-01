<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

</head>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    });
  </script>
<body>
 <?php include 'header.php';
        include 'include/config.php';

           $sql = "SELECT * FROM `td_order`
                      LEFT JOIN td_book
                      ON td_order.o_id_b = td_book.bo_id
                      LEFT JOIN td_personnel
                      ON td_order.o_id_p = td_personnel.p_id
                       ORDER BY td_order.o_id DESC";
              $query = mysqli_query($conn, $sql);
   
  ?>
  <!-- <div class="p-4">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-3">
          <label class="col-form-label col-form-label-lg col-sm-12 m-0">เลขบัตรประจำตัวประชาชน</label>
        </div>
        <div class="col-md-3 ">
          <input class="form-control form-control-lg" placeholder="Your name, please">
        </div>
        <div class="col-md-2 ">
          <a class="btn btn-primary text-center btn-lg" href="#">ค้นหา</a>
        </div>
      </div>
    </div>
  </div> -->
  <div class="p-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table id="example" class="display table">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>เลขบัตรประชาชน</th>
                <th>ชื่อ-สกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>วันที่ยืม</th>
                <th>วันที่คืน</th>
                <th class="">ประเภทหนังสือ</th>
                <th>ชื่อหนังสือ</th>
                <th>สถานะ</th>
                <!-- <th>จัดการข้อมูล</th> -->
              </tr>
            </thead>
            <tbody>
               <?php while ($row = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><?php echo $row['o_id']; ?></td>
                <td><?php echo $row['p_idcard']; ?></td>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_home']; ?></td>
                <td><?php echo $row['p_tel']; ?></td>
                <td><?php echo $row['o_date_loan']; ?></td>
                <td><?php echo $row['0_date_night']; ?></td>
                <td><?php echo $row['bo_cate']; ?></td>
                <td><?php echo $row['bo_name']; ?></td>
                <td>
                   <select name="status" id="status<?php echo $row['o_id']; ?>">
                  <?php //echo $row['o_status'];
                    if($row["o_status"] == "จอง"){

                                echo "<option value='จอง' selected>จอง</option>";
                                echo "<option value='ยืม' >ยืม</option>";
                                // echo "<option value='คืน' >คืน</option>";

                          }
                            elseif($row["o_status"] == "ยืม"){

                                echo "<option value='ยืม' selected>ยืม</option>";
                                echo "<option value='คืน' >คืน</option>";
                            }
                            elseif($row["o_status"] == "คืน"){

                                echo "<option value='คืน' selected>คืน</option>";
                            }




                  ?>
                    
                  </td>
                  <input hidden type="text" name="id" id="id<?php echo $row['o_id']; ?>" value="<?php echo $row['o_id']; ?>">
                  <input hidden type="text" name="bo_id" id="bo_id<?php echo $row['o_id']; ?>" value="<?php echo $row['bo_id']; ?>">
                 
                  <script type="text/javascript">
                            $(document).ready(function(){
                              $("#status<?php echo $row['o_id']; ?>").change(function() {
                                  var status = $("#status<?php echo $row['o_id']; ?>").val();
                                  var id = $("#id<?php echo $row['o_id']; ?>").val();
                                  var bo_id = $("#bo_id<?php echo $row['o_id']; ?>").val();
                                  
                                  jQuery.ajax({
                                      type: "POST",
                                      url: "update_order.php",
                                      data:  {Status:status, Id:id, Boid:bo_id},
                                      success: function(data){ 
                                             alert(data);
                                             document.location.reload(true);
                                      }               
                                  });
                              });
                          });
                          </script>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <div class="row m-2">
            <div class="offset-md-5 col-md-3">
              <a class="btn btn-primary text-center btn-lg" href="editbooknow.php">เพิ่มข้อมูล</a>
            </div>
            <div class="text-center col-md-1">
              <a class="btn btn-primary text-center btn-lg" href="managebook.php">ยืนยัน
                <br> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>