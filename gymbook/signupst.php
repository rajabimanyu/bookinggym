<?php
$conn=mysqli_connect("localhost","root","","databasename");
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$age=$_POST['age'];
$h=$height/100;
$bmi=$weight/($h*$h);
$quer=mysqli_query($conn,"INSERT INTO logingym VALUES('','$name','$email','$age','$pass','$bmi')");
if($quer){
	echo "inserted new record";
}else{
	echo "not inserted";
}
?>