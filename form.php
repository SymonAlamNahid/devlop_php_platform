<html>
<body>
	<head>
	<?php session_start();
$_SESSION['message']='Hi Guys';
$mysqli = new mysqli('localhost' , 'root' , 'mypass123' , 'accounts');
if ($SERVER['REQUESR_METHOD'] == 'POST'){

}

	 ?>

<link rel="stylesheet" type="text/css" href="form.css">
<link rel="icon" href="file:///F:/Website_staff/bloosome_logo1.png">
<title>Log-In</title>

</head>
<script type="text/javascript">
	function sam(){
		window.confirm('Opps,Your access point is wrong.Instead,you can visit our homepage.');
		if(confirm){
			document.location = "file:///F:/Bloosome%20Website/basic.bloosome.com.html" }
			else{
				document.location = "file:///F:/Bloosome%20Website/Login/form.php"
			}
		}

	function bal(){
		window.confirm('Opps,Registration is closed.Please try again later.')
	}
</script>
		
		<form  action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
			<div><? $_SESSION['message']?></div>
			<div class="b"><marquee><div class="c">Registration is open now</div></marquee></div>
			<div class="input-group"><input type="text" name="username" placeholder="User Name" required="required"></div>
		    <div class="input-group"><input  type="email" name="email" placeholder="Email" required="required"></div>
			<div class="input-group"><input type="password" name="password" placeholder="Password" autocomplete="new-password" required="required"></div>
			<div class="input-group"><input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="new-password" required="required"></div>
			<label>Select Your Avatar:</label>
			<div class="input-group"><input type="file" name="avatar" placeholder="Please Choose a file" accept="file:///F:/*" required="required"></div>
			<div class="input-group"><input id="btn" type="submit" onclick="bal()" value="Log-In" name="register"></div>
			
		</form>
		<div class="input-group"><input id="btn2" onclick="sam()" type="submit" value="Already a member?" name="login2"></div>
		
	</body>
		</html>
