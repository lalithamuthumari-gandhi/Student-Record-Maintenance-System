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

if(isset($_POST['subbtn']))
{
	$event_name = $_REQUEST['event'];
	$event_place= $_REQUEST['place'];
	$event_date = $_REQUEST['date'];
	$result     = $_REQUEST['result'];
	$my_file    = $_REQUEST['myfile'];
	$r_no       = $_REQUEST['r_no'];
	$st_name    = $_REQUEST['st_name'];

   //echo $event_name," ",$event_place," ",$event_date," ",$result," ",$my_file," ",$r_no," ",$st_name; 

	$result ="INSERT INTO activity(event_name,event_place,event_date,result,file,roll_no,student_name)
	VALUES('$event_name','$event_place','$event_date','$result','$my_file','$r_no','$st_name')";

	//echo $result;
	if(mysqli_query($conn, $result))
		{
			echo '<script>alert("Uploaded successfully")</script>';
			header("location:activity.php");
		}
		else
		{
			echo '<script>alert("Complete your form")</script>';
		}
}
mysqli_close($conn);
?>
</center>
</body>
 
</html>