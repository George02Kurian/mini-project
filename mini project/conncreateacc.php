<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
	$conn=mysqli_connect('localhost','root','','miniproject');
	if($conn)
	{
		echo "connection success";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['ph'];
		$mobile=$_POST['phone'];
		$dob=$_POST['dob'];
		$gender=$_POST['male'];
		$place=$_POST['place'];
		$city=$_POST['city'];
		$pincode=$_POST['pin'];
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="INSERT INTO `customer`(`First_Name`, `Last_Name`, `Email`, `Phone_code`, `Mobile_Number`, `Date_of_birth`, `Gender`, `Place`, `City`, `Pincode`, `Username`, `Password`) VALUES ('$fname','$lname','$email','$phone','$mobile','$dob','$gender','$place','$city','$pincode','$username','$pass')";
		$query=mysqli_query($conn,$sql);
		if($query)
		{
			echo "Record Inserted";
		}
		else
		{
			echo "Insertion Failed";
		}
	}
	else
	{
		echo "connection failed";
	}
}
?>
	