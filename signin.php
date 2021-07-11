<?php
session_start();
if(isset($_POST['signin'])){
	$roll=$_POST['rollno'];
	$pass=$_POST['pwd'];
	$con=mysqli_connect("localhost","root","","student");
	$select="SELECT * FROM student_reg WHERE Roll_number='$roll' AND Password='$pass'";
	$res=mysqli_query($con,$select);
	$row=mysqli_num_rows($res);
	if($row==1){
		echo "<script>alert('login success');location.href='home1.php'</script>";
	    $_SESSION['roll']=$roll;
	}
	else
	{
		echo "<script>alert('Please enter valid details');location.href='signin.html'</script>";
	}
	} 
 ?>