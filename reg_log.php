<!DOCTYPE html>
<html>
<body>
    <center>
<?php
$conn = mysqli_connect("localhost", "root", "", "login"); 
if ($conn==false) 
{
      die("Connection failed: ". mysqli_connect_error());
}

if(isset($_POST['regbtn']))
{
    //echo "lalitha";
$first_name = $_REQUEST['fname'];
$mid_name   = $_REQUEST['mname'];
$last_name  = $_REQUEST['lname'];
$uname      = $_REQUEST['uname'];
$pswrd      = $_REQUEST['pswrd'];
$roll_no    = $_REQUEST['rno'];

//echo "query";

$result ="INSERT INTO users(FirstName,MiddleName,LastName,UserName,Password,Role)
VALUES('$first_name','$mid_name','$last_name','$uname','$pswrd','$roll_no')";

if(mysqli_query($conn, $result))
	{
		echo '<script>alert("Register successfully")</script>';
        header("location:user_login.php");
	}
	else
    {
		echo '<script>alert("Complete your registration form")</script>';
	}
}
mysqli_close($conn);
?>
</center>
</body>
 
</html>