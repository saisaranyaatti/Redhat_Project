<?php
session_start();
$roll1=$_SESSION['roll'];
$con=mysqli_connect("localhost","root","","student");
$row="DELETE FROM student_reg WHERE Roll_number='".$roll1."'";
$re=mysqli_query($con,$row);
echo "<script>alert('Account deleted successfully,');location.href='signup.html'</script>";

  ?>