<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$refrence=$_POST['massage'];

$insertquery="insert into form_table(name,mobile,email,massage) values('$name','$mobile','$email','$refrence') ";
$query=mysqli_query($con,$insertquery);
if ($query) {
	echo "data inserted ";

} else {
	echo "data not ";
}




}


?>