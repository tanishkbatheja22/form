<?php
$con = mysqli_connect("localhost","root","","feedback") or die(mysqli_error($con));
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$class = $_POST['class'];
$section = $_POST['section'];
$rate = $_POST['rate'];

$user_registration_query = "insert into form(first_name, last_name, class, section, rate) values ('$first_name', '$last_name', '$class', '$section', '$rate')";

$user_registration_submit = mysqli_query($con , $user_registration_query) or die(mysqli_error($con));
echo "Response sucessfully inserted!!";
?>
