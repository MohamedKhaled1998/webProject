<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		.img1{
			  background-image:url('images/bg.webp');
			  background-repeat: no-repeat;
			  background-size: cover;
		}
		.centre{
			margin: 10% 25% 10% 25%;
		}
		.size{
			width: 50%;
		}
		.inputtext{
			width: 100%;
			padding:10px;
			margin: auto;
			border-radius:7px; 
		}
		.buttonsize
		{
			width: 105%;
			padding:10px;
			margin:auto;
			border-radius:7px;
			color: white;
			background-color: #274e70; 
		}
		.font1
		{
			font-size:24px;
			color: #274e70; 
		}
		.font2
		{
			font-size:18px;
			color: #274e70; 
		}
		.frame{
			background-color:rgba(222, 222, 222, 0.7);
			border: solid 2px;
			border-color: #274e70;
			border-radius: 7px;

		}
	</style>		
</head>
<body class="img1">
<?php
include('Examination.php');
$loginErr = $unameErr = $passErr = $query= "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["uname"]))
		$unameErr = "Username is Required";
	else if(empty($_POST["psw"]))
		$passErr = "Password is Required";
	else{
		$sql="select * from login where username='".$_POST["uname"]."' and password ='".$_POST["psw"]."'";
		$row = sel($sql);
		if(empty($row))
			$loginErr = "Invalid Username/Password<br>";
		else
		{
			session_start();
			$_SESSION["username"] = $row["username"];
			switch($row["user_type"])
			{
				case "admin" :
					redirect("admin/adminMainPage.html");
					break;
				case "student" :
					redirect("student/student-main-page.php");
					break;
				case "doctor":
					redirect("doctor/Doctor-main-page.html");
					break;
			}
		}
	}
}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="centre frame">

  <div class="centre size">
  	<span class="error">* <?php echo $loginErr;?></span>
    <label class="font1" for="uname"><b>Username</b></label>
    
    <div>
    <input class="inputtext" type="text" placeholder="Enter Username" name="uname" required>
	<span class="error">* <?php echo $unameErr;?></span>
    </div>
    
    <label class="font1"for="psw"><b>Password</b></label>
    <div>
    <input class="inputtext" type="password" placeholder="Enter Password" name="psw" required>
	<span class="error">* <?php echo $passErr;?></span>
    </div>

    <label><input type="checkbox" id="rme" checked="checked" name="remember"> Remember me</label>

    <div>
    <button class="buttonsize" type="submit">Login</button>
    </div>

    <div class="font2">
    <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </div>
  </div>
</form>
</body>
</html>

