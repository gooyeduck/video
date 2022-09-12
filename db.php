<?php 

$conn = mysqli_connect("localhost","root","","video");

if(!$conn){

	die("Connection Failed!");
}
else {

	echo "success";
}
