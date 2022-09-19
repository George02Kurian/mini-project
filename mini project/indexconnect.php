<?php
    $error="";
    $success="";
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["signin"]))
{
	$conn=mysqli_connect('localhost','root','','miniproject');
	if($conn)
	{
		//echo"connection successful";
        $uname=$_POST["username"];
        $upass=$_POST["pass"];

        $sql=mysqli_query($conn, "select * from `customer` where `Username`='$uname' and `Password`='$upass'");
        $msql=mysqli_fetch_assoc($sql);
        if($msql){
                $success= "Welcome user";
               //redirect to another page on successful login
                 header("Location: home.php "); 
				}
        else{
            $error="Invalid Authentication!!!";
			echo "$error";
        }
	}
		else
	{
		echo"connection failed";
	}
}
	else if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["signup"]))
	{
		header("Location: http://localhost/mini%20project/createaccount.php");
	}
	else
	{
		echo"site unreachable";
	}
?>