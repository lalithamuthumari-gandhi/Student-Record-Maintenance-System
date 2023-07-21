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
      $photo=$_REQUEST['myfile'];
      /*$s_id=$_REQUEST['s_id'];*/
      $roll_no=$_REQUEST['roll_no'];
      $f_name=$_REQUEST['fname'];
      $m_name=$_REQUEST['mname'];
      $l_name=$_REQUEST['lname'];
      $gender=$_REQUEST['dropdown1'];
      $age=$_REQUEST['age'];
      $dob=$_REQUEST['dob'];
      $bgrp=$_REQUEST['bgrp'];
      $email=$_REQUEST['email'];
      $mob_no=$_REQUEST['s_mob'];

      $father_name=$_REQUEST['father_name'];
      $mother_name=$_REQUEST['mother_name'];
      $occupation=$_REQUEST['work'];
      $parent_no=$_REQUEST['p_mob'];
      $address=$_REQUEST['address'];
      $city=$_REQUEST['city'];
      $district=$_REQUEST['district'];
      $state=$_REQUEST['state'];
      $country=$_REQUEST['country'];
      $community=$_REQUEST['dropdown2'];

      $sslc_mark=$_REQUEST['sslc_mark'];
      $sslc_school=$_REQUEST['sslc_school'];
      $sslc_pass=$_REQUEST['sslc_pass'];
      $hsc_mark=$_REQUEST['hsc_mark'];
      $hsc_school=$_REQUEST['hsc_school'];
      $hsc_pass=$_REQUEST['hsc_pass'];
      $ug_cgpa=$_REQUEST['ug_cgpa'];
      $ug_college=$_REQUEST['ug_college'];
      $ug_univ=$_REQUEST['ug_univ'];
      $ug_loc=$_REQUEST['ug_loc'];
      $ug_pass=$_REQUEST['ug_pass'];

//echo $photo," ",$s_id," ",$roll_no," ",$f_name;

$sql ="INSERT INTO students(Photo,Roll_no,FirstName,MiddleName,LastName,
Gender,Age,Dob,Blood_Group,Email,Mobile_no,Father_Name,Mother_Name,Occupation,Parent_no,
Address,City,District,State,Country,Community,Sslc_mark,Sslc_school,Pass_year1,Hsc_mark,Hsc_school,
Pass_year2,Ug_cgpa,Ug_college,Ug_university,Ug_location,Ug_pass_year)
VALUES('$photo','$roll_no','$f_name','$m_name','$l_name','$gender','$age','$dob','$bgrp','$email','$mob_no',
'$father_name','$mother_name','$occupation','$parent_no','$address','$city','$district','$state','$country','$community',
'$sslc_mark','$sslc_school','$sslc_pass','$hsc_mark','$hsc_school','$hsc_pass','$ug_cgpa','$ug_college','$ug_univ','$ug_loc','$ug_pass')";

//echo $sql;
      if(mysqli_query($conn, $sql))
      {
            echo '<script>alert("Uploaded successfully")</script>';
            header("location:student.php");
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

