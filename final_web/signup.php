<?php



//對資料庫伺服器進行連線，並選擇對應的會員資料庫

$con=mysqli_connect("140.127.74.160", "project", "ma302ma302","specter");

mysqli_query($con, "SET NAMES UTF8");

$account = $_POST['usraccount'];
$password = $_POST['usrpassword'];

//如果收到 POST 表單送來的登入資料，到資料庫檢査是否有這個人存在
//（使用 mysql_query("SELECT ...... ")，然後把回傳的東西透過 mysql_fetch_array(......) 來檢査）
$result=mysqli_query($con, "SELECT account FROM user WHERE account='$account'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


if($row == null){

	if(empty($_POST["usraccount"])==FALSE && empty($_POST["usrpassword"])==FALSE){

		$save=mysqli_query($con, "INSERT INTO user (account, password) VALUES ('$account', '$password')");

		echo '<meta http-equiv="refresh" content="0;url=register.html">';
		echo '<script type="text/javascript">';
		echo 'alert("註冊成功!!!")';
		echo '</script>';

 
	}else{

		echo '<meta http-equiv="refresh" content="0;url=register.html">';
		echo '<script type="text/javascript">';
		echo 'alert("帳號或密碼不能為空!!!!!")';
		echo '</script>';

	}

}else{
	echo '<meta http-equiv="refresh" content="0;url=register.html">';
	echo '<script type="text/javascript">';
	echo 'alert("此帳號已被註冊!!!")';
	echo '</script>';
}

mysqli_close($con);
?>
