
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
form{
	position: absolute;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -100px 0 0 -150px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo base_url().'index.php/MyController/login'?>">
		<p>Don't have an account? <a style="" href="<?php echo base_url()."index.php/MyController/signup"; ?>">Sign Up here.</a></p> 
	<div>
		<label>Username</label><br>
		<input type="text" name="username"></input> 
	</div>
	<div>
		<label>Password</label><br>
		<input type="password" name="pass" value=""></input>
	</div>
	<br>
	<div >
		<button type="submit">Log in</button> 
		<a style="float: right;" href="">Forget Password?</a>
	</div>

</form>
</body>