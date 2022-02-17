<?php
$con=mysqli_connect('localhost','root','','apnakisan');
if ($con) {
	?>
	<script>
		alert(" connection successfully");
	</script>
 <?php
}else{
		?>
	<script>
		alert(" No connection ");
	</script>
 <?php
}

?>