<!-- <?php

$con = mysqli_connect('localhost ',' "root");

if($con){
    echo"Connection  successful";
}
else{
    echo"No Conection";
}
mysqli_select_db($con, "php-&-mysql-portfolio" );
$user = $_POST["user"];
$email= $_POST["email"];
$mobile = $_POST["mobile"];
$comments = $_POST["comments"];
$query = "insert into userinfo ( user, email, mobile, comment)
values ("$user", " $email", "$mobile", "$comments", )";


echo "$query";
mysqli_query($con,$query);
header("location:index.php');

?> -->


<?php
$con =
mysqli_connect('localhost', 'root');
if($con) {
echo "Conenction successful";
}else{
echo "No connection";
}
mysqli_select_db($con, ' php-&-mysql-portfolio');
$user = $_POST['user'];
$email =$_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];
// $query = " insert into userinfo (user, email, mobile, comments) 
// values ('$user', '$email', '$mobile', '$comments')";

$query =   "INSERT INTO `userinfo`(`id`, `user`, `email`, `mobile`, `comment`) 
VALUES ('[id]','[$user]','[$email]','[$mobile]','[$comments]')";



echo "$query";

mysqli_query($con,$query);
header('location:index.php');



?>
