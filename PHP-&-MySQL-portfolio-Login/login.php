
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="css/style.css">
    <title>PHP-&-MySQL-portfolio</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap');
</style>
 </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-red">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo3.png" alt="" height="30px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacy.php" target="_blank">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_blank">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Registration Form -->

	<title>Registration Form</title>
    <link rel="stylesheet" href="css/login.css">

<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background-color: #f2f2f2;
}

.container {
	margin-top: 50px;
	display: flex;
	flex-direction: column;
	align-items: center;
}

form {
	background-color: #ffffff;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
}

h1 {
	text-align: center;
	margin-bottom: 30px;
}

label {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

input[type=text], input[type=email], input[type=password] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	border-radius: 4px;
}

button[type=submit]  {
	background-color: #4CAF50;
	color: #ffffff;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 20px;
	margin-top: 20px;
}
button[type=submit] a {background-color: #4CAF50;
	color: #ffffff;

}

button[type=submit]:hover  {
	background-color: #45a049;
}

</style>

</head>
<body>
	<div class="container">
		<form>
			<h1>Registration Form</h1>
			
			<label for="fname"><b>First Name</b></label>
			<input type="text" placeholder="Enter First Name" name="fname" required>
			
			<label for="lname"><b>Last Name</b></label>
			<input type="text" placeholder="Enter Last Name" name="lname" required>
			
			<label for="email"><b>Email Address</b></label>
			<input type="email" placeholder="Enter Email Address" name="email" required>
			
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			
			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
			
			<button type="submit"><a href="https://github.com/mdzaman23">Register</a></button>
		</form>
	</div> <br> <br>

	<footer class="p-3 bg-dark text-white text-center">@ md zaman by copy right 2023</footer>

</body>
</html>
