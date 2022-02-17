<!DOCTYPE html>
<html>
<head>
	
	    <?php include 'css/style.php' ?>
	<?php include 'link/link.php' ?>
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
	
	?>
	<script>
		alert(" Data inserted successfully");
	</script>
 <?php

} else {
	echo "Data not insert";
}




}


?>

</head>
<body>
     
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">APNA KISAN</a><div><img src="images\11.jpg"></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="calculator.html">MSP Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.html">Service</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-----navbar close---->

<section class="contact" id="contactid">
	
	<div class=" container contact1 ">

		<div class="row">

			<div class=" servicediv col-lg-6 col-md-12 col-12">
				<div class=" heading container text-center">
				<h1 CLASS="text-center font-weight-bold ">Feel Free To Contact</h1>
				<p>Hello Everyone! Have a great day :) I am here to help you. If you want to know something or you have any suggestion then please mail me. Thank You.<p>
				</div>
				<div class="row service-icons2">
					<div class=" service-icons col-lg-2 col-2">
					<i class="fa-2x fa fa-map" aria-hidden="true"></i>   <!-- font awasome 4.7.0 java script ,icone --> 
					</div>  
					<div class=" servicesubheading col-lg-10 col-10">
					<h3>Power India Team, Mumbai,Maharashtra</h3>
					</div>
				</div>
				
				<div class="row service-icons2">
					<div class=" service-icons col-lg-2 col-2">
					<i class="fa-2x fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="servicesubheading col-lg-10 col-10">
					<h3>+917014520754 , 0744-2440167</h3>
					
					</div>
				</div>
				
				<div class="row service-icons2">
					<div class=" service-icons col-lg-2 col-2">
					<i class="fa-2x fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="servicesubheading col-lg-10 col-10">
					<h3>akbarkhan0004@gmail.com</h>
					
					</div>
				</div>

				<div class="row service-icons2">
					<div class=" service-icons col-lg-2 col-2">
					<i class="fa-2x fa fa-at" aria-hidden="true"></i>
					</div>
					<div class="servicesubheading col-lg-10 col-10">
					<h3>www.apnakisan.com</h>
					
					</div>
				</div>
				
			</div>

			<!--How we work-->
			
			<div class=" contactus col-lg-6 col-md-12 col-12">
				

			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					
					<input type="text" class="form-control" id="Input Name"  name="name" autocomplete="off" required placeholder="Enter Name here">
				  </div>
				  
				 
					
				  <div class="form-group">
					
					<input type="mobile no." class="form-control" id="Input mobile no." name="mobile" autocomplete="off" required placeholder="Mobile No.">
				  </div>
				   <div class="form-group">
					
					<input type="email" class="form-control" id="InputEmail" name="email" autocomplete="off" required placeholder="Enter email">
					</div>
				  
				  <div class="form-group">
					
					<textarea class="form-control" rows="4"placeholder="Enter Message" name="massage"></textarea>
				  </div>
				  
				  <div class=" form-button d-flex justify-content-center">
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
				</form>
				</div>
				
				
		</div>
	</div>  
</section>  





	<!-- footer start******-->
  <footer class="footersection" id="footerdiv">
		
<div class="list-group">
  <a  href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
  <a  href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
  <a  href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
  <a  href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>

</div>
	
		<div class="container">
			<div class="row">
				<div class=" col-lg-6 col-md-6 col-12 footer-div">
					<div>
						<h3>ABOUT APNA KISAN </h3>
						<P>We are provide pridictive benifit crops for farmer, such that your satisfaction levels are always at a 100%.</P>
					</div>
				</div>
				<div class=" col-lg-6 col-md-6 col-12 footer-div text-center">
					<div>
						<h3>NAVIGATION LINK</h3>
						<li><a href="#about">About</a></li>
						<li><a href="index.php">MSP Calculator</a></li>
					
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>

					</div>
				</div>
					
				</div>
				
			
			<div class="mt-5 text-center">
				<p>Copy right @2020 All rights reserved | This is made by Power India Team</p>
				
			</div>
			
		</div>
		
	</footer>  





</body>
</html>