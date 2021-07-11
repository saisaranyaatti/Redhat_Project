<?php 
if(isset($_POST['submit'])){
	$roll=$_POST['rollno'];
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$passwd=$_POST['pwd'];
	$gender=$_POST['Gender'];
	$coll=$_POST['college'];
	$branch=$_POST['branch'];
	$con=mysqli_connect("localhost","root","","student");
	$insert="INSERT INTO student_reg SET Roll_number = '".$roll."',Name = '".$name."',Email = '".$email."',Password = '".$passwd."',Gender = '".$gender."',College = '".$coll."',Branch = '".$branch."'";
	$res=mysqli_query($con,$insert);
	if($res){
		echo "<script>alert('Successfully Registered,please login');location.href='signin.html'</script>";;
	}
	else
	{
		echo "<script>alert('Already have an account,please login');location.href='signin.html'</script>";;
	}

}
 ?>