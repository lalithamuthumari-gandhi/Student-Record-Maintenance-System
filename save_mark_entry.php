<?php
$conn = mysqli_connect("localhost", "root", "", "login"); 
/*if ($conn==false) 
{
      die("Connection failed: ". mysqli_connect_error());
}*/

if(isset($_POST['subbtn']))
{
$roll_no = $_REQUEST['roll_no'];
$sem_no  = $_REQUEST['sem_no'];
$exam_type    = $_REQUEST['exam_type'];
$sub_no  = $_REQUEST['sub_no'];
$marks    = $_REQUEST['marks'];

//echo $sem_no;
$check_roll="SELECT roll_no FROM grades WHERE roll_no='". $_POST["roll_no"] . "' 
AND sem_no='". $_POST["sem_no"] ."' AND sub_no='". $_POST["sub_no"] . "'" ;

$result=mysqli_query($conn, $check_roll);
//echo $result;
$storeArray = Array();
$row = mysqli_fetch_array($result);
$storeArray[] =  $row != null ? $row['roll_no'] : null;
//echo $storeArray[0];

if($storeArray[0]==NULL)
{
	//echo "hello";
	if(strcmp('CAT_1',$exam_type)==0)
    {  
		//echo"cat1";
        $sql="INSERT INTO grades(roll_no,sem_no,sub_no,cat1_marks)
	      VALUES('$roll_no','$sem_no','$sub_no','$marks')";
		mysqli_query($conn, $sql);
			  echo '<script>alert("CAT1 MARKS ENTRY SUCCESSFULLY")</script>';
			  
	}
	else if(strcmp('CAT_2',$exam_type)==0)
	{
		//echo"cat2";
		$sql="INSERT INTO grades(roll_no,sem_no,sub_no,cat2_marks)
	      VALUES('$roll_no','$sem_no','$sub_no','$marks')";
		if(mysqli_query($conn, $sql))
		{
			echo '<script>alert("CAT2 MARKS ENTRY SUCCESSFULLY")</script>';
		}
		else
		{
			echo '<script>alert("Complete your form")</script>';
		}
	}
    else
	{
		//echo"sem";
        $sql="INSERT INTO grades(roll_no,sem_no,sub_no,sem_marks)
	      VALUES('$roll_no','$sem_no','$sub_no','$marks')";
		if(mysqli_query($conn, $sql))
		{
			echo '<script>alert("SEMESTER MARKS ENTRY SUCCESSFULLY")</script>';
		}
		else
		{
			echo '<script>alert("Complete your form")</script>';
		}
	}
}
else
{
	//echo "1"," ";
	if(strcmp('CAT_1',$exam_type)==0)
	{
		//echo "2"," ",$marks;
		$sql="UPDATE grades SET cat1_marks='$marks' where roll_no='$roll_no'and sem_no='$sem_no' and sub_no='$sub_no'";	
		mysqli_query($conn,$sql);
		echo '<script>alert("CAT1 MARKS ARE UPDATED")</script>';
	}
	else if(strcmp('CAT_2',$exam_type)==0)
	{
		//echo "3";
		$sql="UPDATE grades SET cat2_marks='$marks' where roll_no='$roll_no'and sem_no='$sem_no' and sub_no='$sub_no'";
		mysqli_query($conn,$sql);
		echo '<script>alert("CAT2 MARKS ARE UPDATED")</script>';
	}
	else 
	{
		//echo "4";
		$sql="UPDATE grades SET sem_marks='$marks' where roll_no='$roll_no' and sem_no='$sem_no' and sub_no='$sub_no'";
		mysqli_query($conn,$sql);
		echo '<script>alert("SEM MARKS ARE UPDATED")</script>';

		$sql1="SELECT cat1_marks,cat2_marks,sem_marks,subjects.max_cats,subjects.average_cat,subjects.max_ese,
		subjects.average_ese FROM grades inner join subjects on grades.sub_no=subjects.sub_no 
		where grades.roll_no='$roll_no' and subjects.sem_no='$sem_no' and subjects.sub_no='$sub_no'";
		$result=mysqli_query($conn, $sql1);
        
        echo $sql1;
        $storeArray = Array();
        $row = mysqli_fetch_array($result);
        $storeArray[0] =  $row['cat1_marks'];
        $storeArray[1] =  $row['cat2_marks'];
        $storeArray[2] =  $row['sem_marks'];

		$storeArray[3] =  $row['max_cats'];
		$storeArray[4] =  $row['average_cat'];
		$storeArray[5] =  $row['max_ese'];
		$storeArray[6] =  $row['average_ese'];
        
	    echo $storeArray[0]," ",$storeArray[1]," ",$storeArray[2]," ",$storeArray[3]," ",$storeArray[4]," ",
		$storeArray[5]," ",$storeArray[6]," ";

		if($storeArray[0]!=null && $storeArray[1]!=null && $storeArray[2]!=null)
		{
           $overall_cat=bcmul(
			(($storeArray[0]+$storeArray[1])/(bcmul(2,$storeArray[3]))),
			$storeArray[4]);

			/*$add= $storeArray[0]+$storeArray[1];
			$div= ($storeArray[0]+$storeArray[1])/(bcmul(2,$storeArray[3]));

		   echo "add = ",$add,"div by 2=",$div,"overall_cat=", $overall_cat;*/

		   $overall_sem=bcmul(($storeArray[2]/$storeArray[5]),$storeArray[6]);
		   /*$div=$storeArray[2]/$storeArray[5];
		   echo "div=",$div,"overall_sem=",$overall_sem;*/

		   $overall_marks=$overall_cat+$overall_sem;
		   echo "overall_marks=",$overall_marks;

		  if($overall_marks>=95)
		   {
		      $grade="O";
			  
		   }
		   else if($overall_marks>=90 && $overall_marks<95)
		   {
		      $grade="A+";		  
		   }
		   else if($overall_marks>=80 && $overall_marks<90)
		   {
		      $grade="A";		  
		   }
		   else if($overall_marks>=70 && $overall_marks<80)
		   {
		      $grade="B+";		  
		   }
		   else if($overall_marks>=60 && $overall_marks<70)
		   {
		      $grade="B";		  
		   }
		   else if($overall_marks>=50 && $overall_marks<60)
		   {
		      $grade="C";		  
		   }
		   else{
			  $grade="RA";
		   }
		   echo $grade;
		   $in_grade="UPDATE grades SET grade='$grade',total='$overall_marks' WHERE grades.roll_no='$roll_no' and grades.sem_no='$sem_no'
		   and grades.sub_no='$sub_no'";
		   mysqli_query($conn,$in_grade);
		   //echo '<script>alert("GRADES ARE UPDATED")</script>';   
		}

    }
}

//echo $roll_no," ",$sem_no," ",$cat_no," ",$sub_no," ",$cat_marks," ",$sem_mark;
mysqli_close($conn);
}
?>