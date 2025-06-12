<?php

$con=mysqli_connect("140.127.74.160", "project", "ma302ma302","specter");

mysqli_query($con, "SET NAMES UTF8");


//（使用 mysql_query("SELECT ...... ")，然後把回傳的東西透過 mysql_fetch_array(......) 來檢査）
$result=mysqli_query($con, "SELECT * FROM user");

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

 //先檢査使用者有沒有輸入資料
	if(empty($_POST["usraccount"])==FALSE && empty($_POST["usrpassword"])==FALSE){

		$userAccount=$_POST["usraccount"];
		$userAccount=mysqli_real_escape_string($con, $userAccount);
		$userPassword=$_POST["usrpassword"];
		$userPassword=mysqli_real_escape_string($con, $userPassword);

		if($row["account"]==$_POST["usraccount"]){

			if($row["password"]==$_POST["usrpassword"]){

				session_start();
				$_SESSION["account"]=$_POST["usraccount"];
				$_SESSION["password"]=$_POST["pass"];
				$_SESSION["UID"]=$row["UID"];
				header('Location: loginHome.php');

			}else{

				echo '<meta http-equiv="refresh" content="0;url=home.html">';
				echo '<script type="text/javascript">';
				echo 'alert("帳號或密碼有誤!!!!!")';
				echo '</script>';

			}

		}else{

			echo '<meta http-equiv="refresh" content="0;url=home.html">';
			echo '<script type="text/javascript">';
			echo 'alert("帳號或密碼有誤!!!!!")';
			echo '</script>';

		}

	}else{

		echo '<meta http-equiv="refresh" content="0;url=home.html">';
		echo '<script type="text/javascript">';
		echo 'alert("帳號或密碼不能為空!!!!!")';
		echo '</script>';

	}
}
mysqli_close($con);
?>
