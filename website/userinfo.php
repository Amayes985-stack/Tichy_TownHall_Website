<?php
$con = mysqli_connect('localhost', 'root');

if($con) {
  echo "Connection successful";
} else {
  echo "Conncetion Failed" ;
}

mysqli_select_db($con, 'usr') ;

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = " insert into userinfo (user, email, phone, comments)
values ('$user', '$email', '$phone', '$comment') ";


echo "$query";

mysqli_query($con,$query) ;

header('location:index.php') ;



 ?>
