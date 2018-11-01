<?php 
          include 'include/config.php';
		
	$Status = $_POST['Status'];
	$Id = $_POST['Id'];
	$Boid = $_POST['Boid'];
	echo $Boid;

	if ($Status == "ยืม") {
		$sqlorder = "SELECT `bo_amount` FROM `td_book` WHERE bo_id = '$Boid'";
		$qorder = mysqli_query($conn, $sqlorder);
		$row = mysqli_fetch_array($qorder);
		$num = $row['bo_amount'] - 1;

		$sqllond = "UPDATE `td_book` SET `bo_amount`='$num' WHERE bo_id = '$Boid'";
		mysqli_query($conn, $sqllond);


	}
	if ($Status == "คืน") {
		$sqlorder = "SELECT `bo_amount` FROM `td_book` WHERE bo_id = '$Boid'";
		$qorder = mysqli_query($conn, $sqlorder);
		$row = mysqli_fetch_array($qorder);
		$num = $row['bo_amount'] + 1;

		$sqllond = "UPDATE `td_book` SET `bo_amount`='$num' WHERE bo_id = '$Boid'";
		mysqli_query($conn, $sqllond);


	}



			$sql = "UPDATE `td_order` SET `o_status`='$Status' WHERE `o_id`='$Id'";
			$query = mysqli_query($conn, $sql);
                    if ($query) {
                      echo  "เรียบร้อย";
                    }
	
 ?>