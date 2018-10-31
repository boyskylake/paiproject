<?php
	session_start();

	require_once 'config.php';


	$sql = "SELECT * FROM td_member WHERE m_user = '".mysqli_real_escape_string($conn,$_POST['user'])."' and m_pass = '".mysqli_real_escape_string($conn,$_POST['pass'])."'";
	$db = mysqli_query($conn, $sql);
	// $query = mysqli_query($conn, $sql);
    $objResult = mysqli_fetch_array($db);
	if(!$objResult)
	{
			echo "<script type='text/javascript'>";
                      echo  "alert('Username and Password Incorrect!');";
                      echo "window.location='../index.php';";
                      echo "</script>";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["m_id"];
			$_SESSION["name"] = $objResult["m_name"];
		// echo $objResult[0]["Status"];

			session_write_close();
			
			if(isset($_SESSION["UserID"]))
			{
				header("location:../addhistory.php");
			}
			else
			{
				header("location:../../index.php");
			}
	}
	mysqli_close($conn);
?>